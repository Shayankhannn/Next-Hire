   @php
       $classes = "p-4 bg-white/5  border-2 border-transparent hover:border-blue-800 cursor-pointer transition-colors duration-300 rounded-xl  group ";
   @endphp

   <div {{ $attributes(["class"=> $classes])  }}>
{{ $slot }}

   </div>