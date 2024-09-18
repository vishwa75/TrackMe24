<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=base_url()?>css/styles.css?v=1.0">
    <link rel="stylesheet" href="<?=base_url()?>css/custom.css?v=1.0">
    <script src="<?=base_url()?>js/jquery-3.7.1.js"></script>
</head>
<body>
    <nav class="bg-gray-800 text-white py-4 px-6 w-full fixed top-0 z-50 flex justify-between items-center">
            <div>
                The Application

            </div>
            <div>
                    
            </div>
            <div class="flex justify-between items-center space-x-4 ">
               <div>
              
               <?= isset($date) ? $date : ''; ?>
                    
               </div>
                <div>
                    Logout
                </div>
            </div>
    </nav>