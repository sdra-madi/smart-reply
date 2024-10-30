{{-- resources/views/components/background-section.blade.php --}}
@props([
    'imageUrl' => asset('portal/assets-pro/img/curved-images/curved0.jpg'),
    'gradientFrom' => 'from-blue-700',
    'gradientTo' => 'to-blue-500',
])

<div class="relative flex items-center p-0 mt-6 overflow-hidden bg-center bg-cover min-h-75 rounded-2xl"
    style="background-image: url('{{ $imageUrl }}'); background-position-y: 50%;">
    <span
        class="absolute inset-y-0 w-full h-full bg-center bg-cover bg-gradient-to-tl {{ $gradientFrom }} {{ $gradientTo }} opacity-60"></span>
</div>
