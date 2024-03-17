<template>
    <div id="app">
      <div class="flex flex-col items-center justify-center p-3 min-h-full">
        <h1
          class="my-4 text-3xl text-center font-medium tracking-wider text-purple-700"
        >
          Vue.js Modal transition
        </h1>
        <button
          @click="onToggle"
          class="bg-purple-500 border border-purple-500 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-md hover:shadow-lg hover:bg-purple-600"
        >
        <slot name="trigger" />
        </button>
      </div>
      <transition name="fade">
        <div v-if="isModalVisible">
          <div
            @click="onToggle"
            class="absolute bg-black opacity-70 inset-0 z-0"
          ></div>
          <div
            class="w-full max-w-lg p-3 relative mx-auto my-auto rounded-xl shadow-lg bg-white"
          >
            <div>
              <div class="text-center p-3 flex-auto justify-center leading-6">
                
                <slot name="content" />
              </div>
            </div>
          </div>
        </div>
      </transition>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        isOpen: true
      };
    },
  
    computed: {
      isModalVisible() {
        return this.isOpen;
      }
    },
  
    methods: {
      onToggle() {
        this.isOpen = !this.isOpen;
      }
    }
  };
  </script>