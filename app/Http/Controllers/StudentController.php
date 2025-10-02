<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $students = [
        //         [
        //             'id' => 1,
        //             'nama' => 'Banyu Bening Tegar Pangestu',
        //             'kelas' => '11 RPL 2',
        //             'address' => 'Jl. Mawar No. 123, Kota ABC',
        //             'phone' => '081234567890',
        //             'email' => 'banyu@school.com'
        //         ],
        //         [
        //             'id' => 2,
        //             'nama' => 'Siti Aisyah',
        //             'kelas' => '11 RPL 1',
        //             'address' => 'Jl. Melati No. 456, Kota DEF',
        //             'phone' => '089876543210',
        //             'email' => 'siti@school.com'
        //         ],
        //         [
        //             'id' => 3,
        //             'nama' => 'Ahmad Fauzi',
        //             'kelas' => '11 RPL 3',
        //             'address' => 'Jl. Kenanga No. 789, Kota GHI',
        //             'phone' => '082345678901',
        //             'email' => 'ahmad@school.com'
        //         ],
        //         [
        //             'id' => 4,
        //             'nama' => 'Dewi Lestari',
        //             'kelas' => '11 RPL 2',
        //             'address' => 'Jl. Anggrek No. 101, Kota JKL',
        //             'phone' => '083456789012',
        //             'email' => 'dewi@school.com'
        //         ],
        //         [
        //             'id' => 5,
        //             'nama' => 'Rizky Ramadhan',
        //             'kelas' => '11 RPL 1',
        //             'address' => 'Jl. Tulip No. 202, Kota MNO',
        //             'phone' => '084567890123',
        //             'email' => 'rizky@school.com'
        //         ]
        //     ];

        $students = Student::all();

        return view('student', ['title' => "Student", 'students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
