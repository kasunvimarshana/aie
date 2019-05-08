<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index(Request $request){
        $user = new \App\User();
        $category = new \App\Category();
        $course = new \App\Course();
        
        ///////////////////////////////////////////////////////////
        //$user = \App\User::find(1);
        //$course = \App\Course::find(7);
        
        $newCategory = $category->create(array(
            'name' => 'cat name ' . rand()
        ));
        
        $newCourse = $course->create(array(
            'title' => 'title ' . rand()
        ));
        
        $newCategorizable = $newCourse->categorizables()->create(array(
            'category_id' => $newCategory->id,
        ));
        
        $newLikeable = $newCourse->likeables()->create(array(
            'user_id' => $user->id
        ));
        ///////////////////////////////////////////////////////////
        echo "<pre>";
        //var_dump($category->courses);
        echo "newCategory = " . $newCategory->id;
        echo "<br/>";
        echo "newCourse = " . $newCourse->id;
        echo "<br/>";
        echo "newCategorizable = " . $newCategorizable->id;
        echo "<br/>";
        echo "<hr/>";
        //var_dump($newCourse->categories);
        foreach($newCourse->categories as $cat){
            echo "cat = " . $cat->id;
            echo "<br/>";
        }
        foreach($newCategory->courses as $cou){
            echo "cou = " . $cou->id;
            echo "<br/>";
        }
        foreach($user->likeableCourses as $cou){
            //echo "cou like = " . $cou->id;
            echo "cou like = " . $cou->title;
            echo "<br/>";
        }
        foreach($course->likeableUsers as $use){
            echo "use like = " . $use->id;
            //echo "cou like = " . $cou->title;
            echo "<br/>";
        }
        echo "</pre>";
    }
    
    public function test(){
        if(view()->exists('admin.home')){
            return \View::make('admin.home', array());
        }
    }
}
