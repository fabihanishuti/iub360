<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />

</head>
<body>
    <div class="bg-blue-600 p-3">
        <div class="container mx-auto">
           <div class="flex items-center justify-between">
             <a href="/" class="text-lg font-semibold text-gray-300">IUB Tech 360 Forum</a>
             <div class="flex items-center">
             <a href="/login" class="text-gray-300 hover:text-gray-100 p-2">Login</a>
             </div>
           </div>
        </div>
       </div>

       <div class="container mx-auto mt-10">
        <div class="bg-white p-3 rounded">
           <div class="flex items-center justify-between">
             <h2 class="text-2xl font-semibold">All Posts</h2>
             <a href="/create-post" class="bg-blue-500 text-white p-2 rounded">Create Post</a>
           </div>
           <hr class="my-4">
           <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="bg-white rounded p-3">
                <h3 class="text-xl font-semibold mb-2">Title</h3>
                <p class="text-gray-600 mb-4">Content</p>
                <div class="flex items-center justify-between">
                   <div class="flex items-center">
                     <img src="/img/avatar.png" alt="avatar" class="w-8 h-8 rounded-full mr-2">
                     <span class="text-gray-600">Author</span>
                   </div>
           </div>
        </div>
       </div>


<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
<?php include('chat.php');?> 
</body>

</html>