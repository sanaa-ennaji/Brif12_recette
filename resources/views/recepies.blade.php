<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ========== Tailwind Css ========  -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- ========== AwesomeFonts Css ========  -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/d0fb25e48c.js" crossorigin="anonymous"></script>
    <title>HomePage</title>
    <style>
        body{
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100">
<!-- search bar -->

<div class="relative mx-auto w-64 md:w-96 mt-5">
   
    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
        <svg class="w-6 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                clip-rule="evenodd"></path>
        </svg>
    </div>
    <form action="/search" method="GET">
        <input type="text" name="query" id="query" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2" placeholder="Search...">
        <button type="submit">Search</button>
    </form>
</div>
<!-- search bar end -->
<div id="search-results" class="mt-4"></div>


     <section class="py-6 sm:py-12 dark:bg-gray-800 dark:text-gray-100">
	<div class="container p-6 mx-auto space-y-8">
		<div class="space-y-2 text-center">
			<h2 class="text-3xl font-bold">welcome to the world of recepies</h2>
			<p class="font-serif text-sm dark:text-gray-400">Our community serves as an expansive digital.</p>
		</div>

		<div class="grid grid-cols-1 gap-x-4 gap-y-8 md:grid-cols-2 lg:grid-cols-3">

@foreach ($recepies as $recepie)
			<article class="flex flex-col dark:bg-slate-500">
				<a rel="noopener noreferrer" href="#" aria-label="Te nulla oportere reprimique his dolorum">
					<img  src="{{ asset('storage/images/' . $recepie->image_path) }}" alt="{{ $recepie->title }}" class="object-cover w-full h-52 dark:bg-gray-500" >
				</a>
				<div class="flex flex-col flex-1 p-6">
					<a rel="noopener noreferrer" href="#" aria-label="Te nulla oportere reprimique his dolorum"></a>
                    <h3 class="flex-1 py-2 text-lg font-semibold leadi">{{$recepie['title']}}</h3>
					{{-- <a rel="noopener noreferrer" href="#" class="text-xm tracki uppercase hover:underline dark:text-violet-400">{{$recepie['ingridient']}}</a> --}}
                    <span class="pb-3">  <span style="color:rgb(57, 46, 29); font-size:1.2rem;" >ingridients:</span> {{$recepie['ingridient']}}</span>
                    
                    <span rel="noopener noreferrer" href="#" class="text-xs tracki uppercase  dark:text-violet-400">{{$recepie['instructions']}}</span>
                    {{-- <h4 class="flex-1 py-2 text-lg font-semibold leadi"></h4> --}}
					<div class="flex flex-wrap justify-between pt-3 space-x-2 text-xs dark:text-gray-400">
                       
                        <td class="py-2 px-4 border-b"><span>user : {{ $recepie->user->name }}</span></td>
                
						<span>2.2K views</span>
					</div>
				</div>
			</article>
            @endforeach
	</div>
    </div>
</section>

{{-- <article class="flex flex-col dark:bg-slate-500">
    <a rel="noopener noreferrer" href="#" aria-label="Te nulla oportere reprimique his dolorum">
        <img alt="" class="object-cover w-full h-52 dark:bg-gray-500" src="pizza.jpg">
    </a>
    <div class="flex flex-col flex-1 p-6">
        <a rel="noopener noreferrer" href="#" aria-label="Te nulla oportere reprimique his dolorum"></a>
        <a rel="noopener noreferrer" href="#" class="text-xs tracki uppercase hover:underline dark:text-violet-400">sweets</a>
        <h3 class="flex-1 py-2 text-lg font-semibold leadi">Te nulla oportere reprimique his dolorum</h3>
        <div class="flex flex-wrap justify-between pt-3 space-x-2 text-xs dark:text-gray-400">
<span>June 15, 2024</span>
            <span>2.2K views</span>
        </div>
    </div>
</article> --}}



