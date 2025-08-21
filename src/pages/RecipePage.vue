<template>
  <q-page class="q-pa-md">
    <div class="text-h4 text-center q-mb-lg">Recipes for {{ type }}</div>

    <div v-if="recipes.length">
      <q-card v-for="(recipe, i) in recipes" :key="i" class="q-mb-md">
        <q-card-section>
          <div class="text-h6">{{ recipe.name }}</div>
          <div class="text-subtitle2 q-mb-sm">{{ recipe.short }}</div>

          <q-btn
            flat
            size="sm"
            label="Show / Hide Details"
            @click="recipe.show = !recipe.show"
            color="primary"
            class="q-mb-sm"
          />
          <div v-if="recipe.show" class="q-mt-sm">{{ recipe.body }}</div>
        </q-card-section>
      </q-card>
    </div>

    <!-- Email Signup -->
    <div class="q-mt-xl" style="max-width: 400px; margin: auto">
      <q-input v-model="email" label="Enter your email" outlined class="q-mb-md" />

      <q-select
        v-model="selectedType"
        :options="types.map((t) => ({ label: t.name, value: t.id }))"
        label="Select your SIBO type"
        outlined
        class="q-mb-md"
      />

      <q-btn label="Sign Up for More Recipes" color="secondary" @click="signup" />
      <div v-if="message" class="text-positive q-mt-md">{{ message }}</div>
    </div>
  </q-page>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import axios from 'axios'
import { useRoute } from 'vue-router'

const route = useRoute()
const type = route.query.type || '' // or use state if preferred

const recipes = ref([])
const email = ref('')
const message = ref('')
const types = ref([])
const selectedType = ref(type) // default to current page type

// Load recipes
onMounted(async () => {
  if (!type) return
  try {
    const res = await axios.post('http://localhost:8080/api/recipe', { type })
    recipes.value = res.data.recipes.map((r) => ({ ...r, show: false }))
  } catch (err) {
    console.error(err)
  }

  // Load SIBO types for dropdown
  try {
    const res = await axios.get('http://localhost:8080/api/sibotypes')
    types.value = res.data.types
  } catch (err) {
    console.error(err)
  }
})

// Signup function
const signup = async () => {
  if (!email.value || !selectedType.value) {
    message.value = 'Please enter email and select your SIBO type.'
    return
  }

  try {
    const res = await axios.post('http://localhost:8080/api/signup', {
      email: email.value,
      type: selectedType.value,
    })
    message.value = res.data.message
    email.value = ''
  } catch (err) {
    console.error(err)
  }
}
</script>
