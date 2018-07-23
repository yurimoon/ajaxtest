<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Test;
use Log;

class TestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tests = Test::all();

        return view('tests.index', [
            'tests' => $tests,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $test = new Test;

        return view('tests.create', [
            'test' => $test,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $test = new Test;
        $test->content = $request->content;
        $test->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $test = Test::find($id);

        return view('tests.show', [
            'test' => $test,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $test = Test::find($id);

        return view('tests.edit', [
            'test' => $test,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $test = Test::find($id);
        $test->content = $request->content;
        $test->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $test = Test::find($id);
        $test->delete();

        return redirect('/');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ajax()
    {
        $test = new Test;

        return view('tests.ajax', [
            'test' => $test,
        ]);
    }


    public function doSomething(Request $request)
    {
        $test = new Test;
        $test->content = $request->content;
        if($test->save()){
          $status = 200;
        } else {
          $status = 500;
        }
        return response()->json([
          'status' => $status,
        ], $status);
    }
}
