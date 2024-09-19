<main id="mainLayout">
    <div class="mt-20 grid grid-cols-1 md:grid-cols-12 p-4 gap-4" style="height: 42rem;">
        
        <!-- First Grid Section -->
        <div class="col-span-12 md:col-start-1 md:col-end-7 w-full border-2 border-slate-900 rounded-3xl p-l">
            <div class="flex justify-center items-center dashBoard_panal space-x-4 bg-slate-600 w-full h-8">
                <div class="text-white text-xl"> <?= isset($month) ? $month : ''; ?>  </div>
                <div class="text-white text-xl"> <?= isset($year) ? $year : ''; ?>  </div>
            </div>

            <div class="mt-5 grid grid-cols-7 h-5/6">
            <div id="sunday" class="col-start-1 col-end-2 flex flex-col justify-between items-center">
                    <div class="text-xl text-red-700 font-semibold">Sunday</div>
                    
                    <?php foreach($sunday as $sday): ?>
                        <div class="p-6">
                            <?php if($date == $sday) { ?>
                                <div class="relative flex flex-col bg-white shadow-sm border-4 border-red-700 rounded-lg w-16 h-16">
                            <?php } else {?>
                                <div class="relative flex flex-col bg-white shadow-sm border-4 border-slate-200 rounded-lg w-16 h-16">
                            <?php } ?>
                                <div class="justify-center items-center p-4 text-xl text-red-700 font-semibold">
                                    <span><?= htmlspecialchars($sday); ?></span>
                                </div>
                            </div>  
                        </div> 
                    <?php endforeach; ?>

                    <?php if($sundayCount == 4) { ?>
                        <div class="p-6">
                            <div class="relative flex flex-col bg-white shadow-sm rounded-lg w-16 h-16">
                                <div class="justify-center items-center p-4 text-xl text-black font-semibold">
                                    
                                </div>
                            </div>  
                        </div>
                    <?php } ?>

                </div>

                <div id="monday" class="col-start-2 col-end-3 flex flex-col justify-between items-center">
                    <div class="text-xl text-black font-semibold">Monday</div>
                    
                    
                    <?php foreach($monday as $mday): ?>
                        <div class="p-6">
                            <?php if($date == $mday) { ?>
                                <div class="relative flex flex-col bg-white shadow-sm border-4 border-red-700 rounded-lg w-16 h-16">
                            <?php } else {?>
                                <div class="relative flex flex-col bg-white shadow-sm border-4 border-slate-200 rounded-lg w-16 h-16">
                            <?php } ?>
                                <div class="justify-center items-center p-4 text-xl text-black font-semibold">
                                    <span><?= htmlspecialchars($mday); ?></span>
                                </div>
                            </div>  
                        </div> 
                    <?php endforeach; ?>

                    <?php if($mondayCount == 4) { ?>
                        <div class="p-6">
                            <div class="relative flex flex-col bg-white shadow-sm rounded-lg w-16 h-16">
                                <div class="justify-center items-center p-4 text-xl text-black font-semibold">
                                    
                                </div>
                            </div>  
                        </div>
                    <?php } ?>

                </div>

                <div id="tuesday" class="col-start-3 col-end-4 flex flex-col justify-between items-center">
                    <div class="text-xl text-black font-semibold">Tuesday</div>
                    
                    <?php foreach($tuesday as $tday): ?>
                        <div class="p-6">
                            <?php if($date == $tday) { ?>
                                <div class="relative flex flex-col bg-white shadow-sm border-4 border-red-700 rounded-lg w-16 h-16">
                            <?php } else {?>
                                <div class="relative flex flex-col bg-white shadow-sm border-4 border-slate-200 rounded-lg w-16 h-16">
                            <?php } ?>
                                <div class="justify-center items-center p-4 text-xl text-black font-semibold">
                                    <span><?= htmlspecialchars($tday); ?></span>
                                </div>
                            </div>  
                        </div> 
                    <?php endforeach; ?>

                    <?php if($tuesdayCount == 4) { ?>
                        <div class="p-6">
                            <div class="relative flex flex-col bg-white shadow-sm rounded-lg w-16 h-16">
                                <div class="justify-center items-center p-4 text-xl text-black font-semibold">
                                    
                                </div>
                            </div>  
                        </div>
                    <?php } ?>

                </div>

                <div id="wednesday" class="col-start-4 col-end-5 flex flex-col justify-between items-center">
                    <div class="text-xl text-black font-semibold">Wednesday</div>
                    
                    <?php foreach($wednesday as $wday): ?>
                        <div class="p-6">
                            <?php if($date == $wday) { ?>
                                <div class="relative flex flex-col bg-white shadow-sm border-4 border-red-700 rounded-lg w-16 h-16">
                            <?php } else {?>
                                <div class="relative flex flex-col bg-white shadow-sm border-4 border-slate-200 rounded-lg w-16 h-16">
                            <?php } ?>
                                <div class="justify-center items-center p-4 text-xl text-black font-semibold">
                                    <span><?= htmlspecialchars($wday); ?></span>
                                </div>
                            </div>  
                        </div> 
                    <?php endforeach; ?>

                    <?php if($wednesdayCount == 4) { ?>
                        <div class="p-6">
                            <div class="relative flex flex-col bg-white shadow-sm rounded-lg w-16 h-16">
                                <div class="justify-center items-center p-4 text-xl text-black font-semibold">
                                    
                                </div>
                            </div>  
                        </div>
                    <?php } ?>

                </div>

                <div id="thursday" class="col-start-5 col-end-6 flex flex-col justify-between items-center">
                    <div class="text-xl text-black font-semibold">Thursday</div>
                    
                    <?php foreach($thursday as $thday): ?>
                        <div class="p-6">
                            <?php if($date == $thday) { ?>
                                <div class="relative flex flex-col bg-white shadow-sm border-4 border-red-700 rounded-lg w-16 h-16">
                            <?php } else {?>
                                <div class="relative flex flex-col bg-white shadow-sm border-4 border-slate-200 rounded-lg w-16 h-16">
                            <?php } ?>
                                <div class="justify-center items-center p-4 text-xl text-black font-semibold">
                                    <span><?= htmlspecialchars($thday); ?></span>
                                </div>
                            </div>  
                        </div> 
                    <?php endforeach; ?>

                    <?php if($thursdayCount == 4) { ?>
                        <div class="p-6">
                            <div class="relative flex flex-col bg-white shadow-sm rounded-lg w-16 h-16">
                                <div class="justify-center items-center p-4 text-xl text-black font-semibold">
                                    
                                </div>
                            </div>  
                        </div>
                    <?php } ?>

                </div>

                <div id="friday" class="col-start-6 col-end-7 flex flex-col justify-between items-center">
                    <div class="text-xl text-black font-semibold">Friday</div>
                    
                    <?php foreach($friday as $fday): ?>
                        <div class="p-6">
                            <?php if($date == $fday) { ?>
                                <div class="relative flex flex-col bg-white shadow-sm border-4 border-red-700 rounded-lg w-16 h-16">
                            <?php } else {?>
                                <div class="relative flex flex-col bg-white shadow-sm border-4 border-slate-200 rounded-lg w-16 h-16">
                            <?php } ?>
                                <div class="justify-center items-center p-4 text-xl text-black font-semibold">
                                    <span><?= htmlspecialchars($fday); ?></span>
                                </div>
                            </div>  
                        </div> 
                    <?php endforeach; ?>

                    <?php if($fridayCount == 4) { ?>
                        <div class="p-6">
                            <div class="relative flex flex-col bg-white shadow-sm rounded-lg w-16 h-16">
                                <div class="justify-center items-center p-4 text-xl text-black font-semibold">
                                    
                                </div>
                            </div>  
                        </div>
                    <?php } ?>

                </div>

                <div id="saturday" class="col-start-7 col-end-8 flex flex-col justify-between items-center">
                    <div class="text-xl text-black font-semibold">Saturday</div>
                    
                    <?php foreach($saturday as $sday): ?>
                        <div class="p-6">
                            <?php if($date == $sday) { ?>
                                <div class="relative flex flex-col bg-white shadow-sm border-4 border-red-700 rounded-lg w-16 h-16">
                            <?php } else {?>
                                <div class="relative flex flex-col bg-white shadow-sm border-4 border-slate-200 rounded-lg w-16 h-16">
                            <?php } ?>
                                <div class="justify-center items-center p-4 text-xl text-black font-semibold">
                                    <span><?= htmlspecialchars($sday); ?></span>
                                </div>
                            </div>  
                        </div> 
                    <?php endforeach; ?>

                    <?php if($saturdayCount == 4) { ?>
                        <div class="p-6">
                            <div class="relative flex flex-col bg-white shadow-sm rounded-lg w-16 h-16">
                                <div class="justify-center items-center p-4 text-xl text-black font-semibold">
                                    
                                </div>
                            </div>  
                        </div> 
                    <?php } ?>

                </div>

                
            </div>

        </div>

        <!-- Second Grid Section -->
        <div class="col-span-12 md:col-start-7 md:col-end-13 w-full border-2 border-slate-900 rounded-3xl">
            <div class="flex justify-center items-center dashBoard_panal space-x-4 bg-slate-600 w-full h-8">
                <div class="text-white text-xl"> <?= isset($month) ? $month : ''; ?>  </div>
                <div class="text-white text-xl"> <?= isset($year) ? $year : ''; ?>  </div>
            </div>
        </div>
    </div>
</main>
