<template>
    <Head title="transactions" />
  
    <AuthenticatedLayout>
      <article class="grid grid-cols-12 gap-6 p-6">
        <!-- Left Section -->
        <div class="col-span-8">
          <!-- Transaction Title -->
          <div class="bg-white rounded-xl shadow-md p-6 mb-6">
            <h2 class="font-bold text-gray-800">Transactions</h2>
            <hr class="my-5 border-t border-gray-200" />
  
            <!-- Categories -->
            <h3 class="text-lg font-bold text-gray-800 mb-3">Categories</h3>
            <div class="flex overflow-x-auto space-x-4 mb-6">
              <PrimaryButton>All</PrimaryButton>
              <PrimaryButton>Pastries</PrimaryButton>
              <PrimaryButton>Hotbakes</PrimaryButton>
              <PrimaryButton>Loaves</PrimaryButton>
              <PrimaryButton>Assorted Bread</PrimaryButton>
            </div>
  
            <!-- Transaction List -->
            <div class="grid grid-cols-2 gap-4">
              <!-- Transaction Cards -->
              <!-- Replace this with your actual transaction cards -->
              <div class="bg-white rounded-xl shadow-md p-6">
                <h4 class="text-lg font-bold text-gray-800">Transaction 1</h4>
                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
              <div class="bg-white rounded-xl shadow-md p-6">
                <h4 class="text-lg font-bold text-gray-800">Transaction 2</h4>
                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
          </div>
        </div>
  
        <!-- Right Section -->
        <div class="col-span-4">
          <!-- Current Order -->
          <div class="bg-white rounded-xl shadow-md p-6 mb-6">
            <div class="flex justify-between items-center mb-4">
              <h4 class="text-lg font-bold text-gray-800">Current Order</h4>
              <button class="text-red-500 hover:text-red-700">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                </svg>
              </button>
            </div>
            <hr class="my-5 border-t border-gray-200" />
  
            <!-- Date -->
            <h4 class="text-lg font-bold text-gray-800 mb-4">April 13, 2024</h4>
  
            <!-- Transaction Details -->
            <!-- Replace this with your actual transaction details -->
            <div class="flex flex-col space-y-4">
              <div class="bg-white rounded-xl shadow-md p-4">
                <h5 class="text-md font-bold text-gray-800">Brownies</h5>
                <h5 class="text-md font-bold text-gray-800">P150</h5>
              </div>
              <div class="bg-white rounded-xl shadow-md p-4">
                <h5 class="text-md font-bold text-gray-800">Brownies</h5>
                <h5 class="text-md font-bold text-gray-800">P150</h5>
              </div>
            </div>
          </div>
  
          <!-- Payment Options -->
          <div class="bg-white rounded-xl shadow-md p-6">
            <div class="flex flex-col space-y-4">
              <div class="flex space-x-4">
                <PrimaryButton>Cash</PrimaryButton>
                <PrimaryButton>Check</PrimaryButton>
                <PrimaryButton>E-Wallet</PrimaryButton>
              </div>
              <div class="flex justify-center">
                <PrimaryButton>Cash</PrimaryButton>
              </div>
            </div>
          </div>
        </div>
      </article>
    </AuthenticatedLayout>
  </template>