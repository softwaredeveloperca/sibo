<template>
  <q-page class="q-pa-md">
    <!-- Fancy Title -->
    <div class="text-center q-mb-sm" style="margin-top: 40px">
      <span
        style="font-family: 'Viga', sans-serif; font-size: 36px; font-weight: 400; color: #003ac3"
      >
        Sibo
      </span>
      <span
        style="font-family: 'Ubuntu', sans-serif; font-size: 36px; font-weight: 700; color: #111"
      >
        Mealplan
      </span>
    </div>

    <!-- Subtitle -->
    <div class="text-center q-mb-xl" style="font-size: 18px; font-weight: 500; color: #555">
      Get a customized SIBO mealplan based on the type of SIBO you have.
    </div>

    <!-- SIBO Type Select (only when not selected) -->

    <div v-if="!selectedType" class="row justify-center q-mb-lg">
      <div style="max-width: 400px; width: 100%">
        <q-select
          v-model="selectedType"
          :options="siboTypes"
          label="Select your SIBO type"
          placeholder="Select your SIBO type"
          outlined
          dense
          emit-value
          map-options
          style="width: 100%"
        />
      </div>
    </div>

    <div v-if="selectedType" class="row q-gutter-lg justify-center q-mt-lg">
      <div v-for="meal in meals" :key="meal" class="col-12 col-md-4">
        <q-card
          flat
          bordered
          class="q-pa-md"
          :style="{
            minHeight: '200px',
            display: 'flex',
            flexDirection: 'column',
            justifyContent: 'space-between',
            borderTop: `5px solid ${mealColors[meal]}`,
          }"
        >
          <!-- Icon & Title -->
          <div class="row items-center q-mb-md">
            <q-icon :name="mealIcons[meal]" size="36px" class="q-mr-sm" :color="mealColors[meal]" />
            <div class="text-h6">{{ meal.charAt(0).toUpperCase() + meal.slice(1) }}</div>
          </div>

          <!-- Recipe Info -->
          <div v-if="recipes[meal]">
            <div class="text-subtitle1">{{ recipes[meal].name }}</div>
            <div class="text-body2 q-mt-sm">{{ recipes[meal].short_description }}</div>

            <!-- Toggle full recipe body -->
            <div
              v-if="showFull[meal]"
              class="q-mt-sm text-body1"
              style="white-space: pre-wrap"
              v-html="formatRecipe(recipes[meal].body)"
            ></div>

            <!-- Read More / Show Less Button -->
            <q-btn
              flat
              dense
              class="q-mt-sm self-start"
              :label="showFull[meal] ? 'Show Less' : 'Read More'"
              :icon="showFull[meal] ? 'mdi-chevron-up' : 'mdi-chevron-down'"
              @click="showFull[meal] = !showFull[meal]"
            />
          </div>

          <div v-else class="text-grey q-mb-md">Loading recipe...</div>

          <!-- Refresh button -->
          <q-btn
            label="Refresh"
            color="primary"
            size="sm"
            unelevated
            @click="fetchRecipe(meal)"
            class="self-end q-mt-sm"
          />
        </q-card>
      </div>
    </div>

    <div v-if="selectedType" class="row items-start justify-between q-mt-xl q-gutter-md">
      <!-- Left: Signup -->
      <div style="max-width: 300px; width: 100%; padding-top: 40px">
        <q-input v-model="email" label="Enter your email" outlined dense class="q-mb-sm" />

        <q-btn
          label="Sign Up for a Daily Meal Plan"
          color="secondary"
          @click="signup"
          :disable="loadingSignup"
          dense
        />
        <div v-if="message" class="text-positive q-mt-sm">{{ message }}</div>
      </div>

      <!-- Right: Social Share -->
      <div class="column items-end">
        <div class="text-subtitle2 q-mb-sm">Share</div>
        <div class="row q-gutter-sm">
          <q-btn
            v-for="platform in socialPlatforms"
            :key="platform.name"
            :label="platform.name"
            :icon="platform.icon"
            dense
            :style="{ backgroundColor: platform.color, color: 'white' }"
            @click="shareMealplan(platform.name)"
          />
        </div>
      </div>
    </div>
    <br /><br /><br />
  </q-page>
</template>

<script setup>
import { ref, watch, inject, reactive } from 'vue'
import axios from 'axios'

// Injected from layout (already a ref)
const selectedType = inject('selectedType')

const siboTypes = [
  'Hydrogen-Dominant SIBO',
  'Mixed-Dominant SIBO',
  'Hydrogen sulfide SIBO',
  'Methane-Dominant SIBO',
]

const formatRecipe = (text) => {
  if (!text) return ''
  return text
    .replace(/(Ingredients:)/gi, '<strong>$1</strong>')
    .replace(/(Extended Notes:)/gi, '<strong>$1</strong>')
    .replace(/\n/g, '<br>')
}

const showFull = reactive({
  breakfast: false,
  lunch: false,
  dinner: false,
})

const meals = ['breakfast', 'lunch', 'dinner']
const recipes = ref({
  breakfast: null,
  lunch: null,
  dinner: null,
})

const mealIcons = {
  breakfast: 'mdi-coffee',
  lunch: 'mdi-food-apple',
  dinner: 'mdi-food-steak',
}

const socialPlatforms = [
  { name: 'Twitter', icon: 'mdi-twitter', color: '#1DA1F2' },
  { name: 'Facebook', icon: 'mdi-facebook', color: '#1877F2' },
  { name: 'LinkedIn', icon: 'mdi-linkedin', color: '#0A66C2' },
  { name: 'WhatsApp', icon: 'mdi-whatsapp', color: '#25D366' },
  { name: 'Email', icon: 'mdi-email', color: '#D44638' },
]

const mealColors = {
  breakfast: '#FFA500', // orange
  lunch: '#4CAF50', // green
  dinner: '#9C27B0', // purple
}

const email = ref('')
const message = ref('')

// Watch for type selection and load recipes
watch(selectedType, async (newType) => {
  if (newType) {
    for (const meal of meals) {
      await fetchRecipe(meal)
    }
  }
})

const fetchRecipe = async (meal) => {
  try {
    const typeKey = selectedType.value.replace(/\s+/g, '-').toLowerCase()
    const res = await axios.get(`http://localhost:8080/api/recipe/${typeKey}/${meal}`)
    recipes.value[meal] = res.data
  } catch (err) {
    console.error(`Error fetching ${meal} recipe`, err)
  }
}

const shareMealplan = (platform) => {
  const planText = `
SIBO Mealplan (${selectedType.value}):

Breakfast: ${recipes.value.breakfast?.name || 'Not loaded'}
Lunch: ${recipes.value.lunch?.name || 'Not loaded'}
Dinner: ${recipes.value.dinner?.name || 'Not loaded'}
  `
  if (platform === 'Twitter') {
    window.open(`https://twitter.com/intent/tweet?text=${encodeURIComponent(planText)}`)
  } else if (platform === 'Facebook') {
    window.open(`https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(planText)}`)
  } else if (platform === 'LinkedIn') {
    window.open(
      `https://www.linkedin.com/sharing/share-offsite/?url=${encodeURIComponent(planText)}`,
    )
  }
}
const loadingSignup = ref(false)

const signup = async () => {
  if (!email.value || !selectedType.value) {
    message.value = 'Please enter email to receive a daily mealplan.'
    return
  }

  loadingSignup.value = true
  try {
    const res = await axios.post('http://localhost:8080/api/signup', {
      email: email.value,
      type: selectedType.value,
    })
    message.value = res.data.message
    email.value = ''
  } catch (err) {
    console.error(err)
  } finally {
    loadingSignup.value = false
  }
}
</script>

<style>
.social-twitter {
  border-color: #1da1f2;
  color: #1da1f2;
}

.social-facebook {
  border-color: #1877f2;
  color: #1877f2;
}

.social-linkedin {
  border-color: #0a66c2;
  color: #0a66c2;
}

.social-whatsapp {
  border-color: #25d366;
  color: #25d366;
}

.social-email {
  border-color: #d44638;
  color: #d44638;
}
</style>
