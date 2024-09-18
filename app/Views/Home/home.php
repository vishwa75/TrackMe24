<main id="mainLayout">
    <div class="mt-20 grid grid-cols-1 md:grid-cols-12 p-4 gap-4" style="height: 33rem;">
        
        <!-- First Grid Section -->
        <div class="col-span-12 md:col-start-1 md:col-end-7 w-full border-2 border-slate-900 rounded-3xl p-l">
            <div class="flex justify-center items-center dashBoard_panal space-x-4 bg-slate-600 w-full h-8">
                <div class="text-white text-xl"> <?= isset($month) ? $month : ''; ?>  </div>
                <div class="text-white text-xl"> <?= isset($year) ? $year : ''; ?>  </div>
            </div>

            <div class="p-6">
                <div class="relative flex flex-col bg-white shadow-sm border-4 border-slate-200 rounded-lg w-32 h-32">
                    <div class="p-4">
                        <!-- Content goes here -->
                    </div>
                </div>  
            </div>
        </div>

        <!-- Second Grid Section -->
        <div class="col-span-12 md:col-start-7 md:col-end-13 w-full border-2 border-slate-900 rounded-3xl">
            <div class="flex justify-center items-center dashBoard_panal space-x-4 bg-slate-600 w-full h-8">
                <div class="text-white text-xl"> <?= isset($month) ? $month : ''; ?>  </div>
                <div class="text-white text-xl"> <?= isset($year) ? $year : ''; ?>  </div>
            </div>

            <div class="p-6">
                <div class="relative flex flex-col bg-white shadow-sm border-4 border-slate-200 rounded-lg w-32 h-32">
                    <div class="p-4">
                        <!-- Content goes here -->
                    </div>
                </div>  
            </div>
        </div>
    </div>
</main>
