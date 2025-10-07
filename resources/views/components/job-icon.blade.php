@props(['icon'])
<span class="flex items-center gap-2">
  <i data-lucide="{{ $icon }}" {{ $attributes(["class"=>"w-5 h-5 text-blue-500"]) }} ></i>
  {{ $slot }}
</span>
