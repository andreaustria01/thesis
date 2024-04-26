<script setup>
import { ref } from 'vue';

// Modal
const showModal = ref(false);

function toggleModal() {
    showModal.value = !showModal.value;
}
</script>

<template>
    <div>
        <!-- Modal trigger -->
        <slot name="trigger" @click="toggleModal" />

        <!-- Modal -->
        <TransitionRoot as="template">
            <TransitionChild
                :enter-class="enterFromClass"
                :enter-active-class="enterActiveClass"
                :enter-to-class="enterToClass"
                :leave-class="leaveFromClass"
                :leave-active-class="leaveActiveClass"
                :leave-to-class="leaveToClass"
            >
                <div v-show="showModal" class="modal-overlay" @click="toggleModal">
                    <div class="modal" @click.stop>
                        <!-- Modal content -->
                        <slot name="content" />
                    </div>
                </div>
            </TransitionChild>
        </TransitionRoot>
    </div>
</template>

<style scoped>
.modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
}

.modal {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}
</style>