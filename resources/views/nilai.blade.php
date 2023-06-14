@php
    $nama = "Budi";
    $nilai = 60;
@endphp
<<<<<<< HEAD
{{-- jika nilai lebih dari sama dengan 60 maka siswa lulus
    jika nilai kurang dari sama dengan 60 maka siswa tidak lulus --}}
=======
<<<<<<< HEAD
{{-- jika nilai lebih dari sama dengan 60 maka siswa lulus
    jika nilai kurang dari sama dengan 60 maka siswa tidak lulus --}}
=======

{{-- jikanilailebihdarisamadengan60makasiswalulusjika
    jika nilai kurang dari sama dengan 60 maka siswa tidak  --}}
>>>>>>> cba2684 (Praktikum 8)
>>>>>>> 53aa5fd (Praktikum)

    @if ($nilai >= 60)
        @php
            $ket = "Lulus";
        @endphp
    @else
        @php
<<<<<<< HEAD
            $ket = "Tidak lulus";
=======
<<<<<<< HEAD
            $ket = "Tidak lulus";
=======
            $ket = "Tidak lulus"
>>>>>>> cba2684 (Praktikum 8)
>>>>>>> 53aa5fd (Praktikum)
        @endphp
    @endif

    Siswa yang bernama {{ $nama }}
<<<<<<< HEAD
    <br>Dengan Nilai {{ $nilai }}
=======
<<<<<<< HEAD
    <br>Dengan Nilai {{ $nilai }}
=======
    <br>Dengan nilai {{ $nilai }}
>>>>>>> cba2684 (Praktikum 8)
>>>>>>> 53aa5fd (Praktikum)
    <br>Dinyatakan {{ $ket }}
