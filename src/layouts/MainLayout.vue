<template>
  <q-layout view="lHh Lpr lFf">
    <!-- Header -->
    <q-header elevated class="bg-white border-b border-gray-200">
      <q-toolbar class="justify-between items-center">
        <!-- Left Spacer -->
        <div style="width: 120px"></div>

        <!-- Logo (always centered) -->
        <img
          src="/logo.png"
          alt="Sibo Mealplan Logo"
          style="height: 100px; width: auto; object-fit: contain"
        />

        <!-- Dropdown (only shows after a selection is made) -->
        <div style="width: 120px; text-align: right">
          <q-select
            v-if="selectedType"
            v-model="selectedType"
            :options="mealTypes"
            dense
            outlined
            options-dense
            style="min-width: 120px"
          />
        </div>
      </q-toolbar>
    </q-header>

    <!-- Main Content -->
    <q-page-container>
      <router-view />
    </q-page-container>
  </q-layout>
</template>

<script setup>
import { ref, provide } from 'vue'

/**
 * Provide selectedType so child pages can update it
 */
const selectedType = ref(null)
provide('selectedType', selectedType)

// Meal type options for dropdown
const mealTypes = [
  'Hydrogen-Dominant SIBO',
  'Methane-Dominant SIBO',
  'Hydrogen Sulfide-Dominant SIBO',
  'Mixed-Type SIBO',
]
</script>
