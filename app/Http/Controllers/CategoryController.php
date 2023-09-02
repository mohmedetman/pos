<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;//CategoryTranslation
use App\Models\CategoryTranslation;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //     $rules = [];

       foreach (config('translatable.locales') as $locale) {

    //         $rules += [$locale .'_title' => ['required', Rule::unique('category_translations', 'name')]];

    //     }//end of for each

    // //    $d= $request->validate($rules);
    // return $request ;

        // Post::create(
            $rules = [];

            foreach (config('translatable.locales') as $locale) {

                $rules += [$locale . '.name' =>
                //  [
                    'required'
                // , Rule::unique('post_translations', 'title')]
            ];
        }

            }//end of for each

       $request->validate($rules);

       Category::create($request->all());

        //     [
        //     'ar' => ['title' => 'My first post'],
        //     'en' => ['title' => 'My first post'],
        // ]
            //  $rules
           //  $locale => ['title' => 'My first post']

            //  $request->except('_token')


        // foreach (config('translatable.locales') as $locale) {
        //     // $rules['name_'.$locale] = 'string';
        //     // $rules[$locale . '.full_text'] = 'string';
        // }


        // foreach (config('translatable.locales') as $locale) {

        //     $rules += ['name_'.$locale => ['required', Rule::unique('category_translations', 'name')]];

        // }//end of for each
        // $data = [
        //     // 'author' => 'Gummibeer',
        //     // 'en' => ['title' => 'My first post'],
        //     // 'ar' => ['title' => 'Mon premier post'],

        //   ];
        //  $request->validate($rules);
        //   $post = Post::create($rules);

    //   $date = $request->validate($rules);
        //return $request ;
    //     Category::create([
    //         'name_en'=>'ehrthtr',
    //         'name_ar'=>'etttr'
    //     ],
    //     // $rules
    // );

        //  foreach (config('translatable.locales') as $locale) {
        //       Category::create(
        //         $request->all()
                // [

                // 'name' =>[
                //             // $translationData,$locale
                //         //    $locale =>  $request->input("name_{$locale}"),
                //         // $locale=>  $request->input("name_{$locale}"),
                //         //    'ar' =>  $request->input("name_ar"),
                //         //    'en' =>  $request->input("name_en"),
                //         ]






            //   ]



            //     // $translationData,$locale
            //    'en' => 'Name in English',
            //    'ar' => 'Naam in het Nederlands'


    //     );
    // }
        // foreach (config('translatable.locales') as $locale) {
        //     $translationData = [
        //         'name' => $request->input("name_{$locale}"),
        //         // 'content' => $request->input("content_{$locale}")
        //     ];

        //     $post = new Category;
        //     $post->setTranslation('name', $locale, $translationData['name']);
        //     // $post->setTranslation('content', $locale, $translationData['content']);
        //     $post->save();
        // }
        // // foreach (config('translatable.locales') as $locale) {
        //     $translationData = [
        //         'name' => $request->input("name{$locale}"),
        //         // 'content' => $request->input("content_{$locale}")
        //     ];
        //      Category::create([
        //     'name' => [
        //         $translationData,$locale
        //     //    'en' => 'Name in English',
        //     //    'ar' => 'Naam in het Nederlands'
        //     ],
        //     ]
        // );

            // $post = new Category;
            // $post->setTranslation('name', $locale, $translationData['name']);
            // // $post->setTranslation('content', $locale, $translationData['content']);
            // $post->save();
        // }

        // Category::create([
        //     'name' => [
        //        'en' => 'Name in English',
        //        'ar' => 'Naam in het Nederlands'
        //     ],
        //  ]);
        // foreach (config('translatable.locales') as $locale) {
        //     $data = [
        //         // 'name' => $request->input("{$locale}name"),
        //         'name' => $request->input("name{$locale}"),

        //         // 'content' => $request->input("content_{$locale}")
        //     ];

        //    Category::setTranslations('name', [$locale => $data['name']]);;
        //     // $post->
        //     // $post->setTranslations('content', [$locale => $data['content']]);
        //     $post->save();
        // }

        // $rules = [];

        // foreach (config('translatable.locales') as $locale) {

        //     $rules += [$locale . '.name' => ['required', Rule::unique('category_translations', 'name')]];

        // }//end of for each

        // $request->validate($rules);
        // $cat = Category::create([
        //     'name'=>'dsmkdmfksdlfsdf',
        // ]);


        // $cat->translations()->create([
        //     'locale' => $locale,
        //     'name' => $request->input("$locale _name"),
        // ]);

       // $rules
        // 'name' => $request->input('name'),


    // return $request ;

        session()->flash('success', __('site.added_successfully'));
         return redirect()->route('categories.index');
        // return redirect()->route('dashboard.categories.index');


    // {
    //     $data = $request->validate([
    //         // 'name' => 'required',
    //         // 'content' => 'required',
    //         'translations.*.name' => 'required',
    //         // 'translations.*.content' => 'required',
    //         // Other validation rules
    //     ]);
        // $rules = [];

        // foreach (config('translatable.locales') as $locale) {

        //     $rules += [$locale . '.name' => ['required', Rule::unique('category_translations', 'name')]];

        // }//end of for each

        // $request->validate($rules);

    //   $cat = Category::create([
    //         'name'=>'name',
    //         // 'name'=>'adscdscds']
    //     ]
    //         // $request->all()
    // );
    // foreach (config('translatable.locales') as $locale) {
    //     CategoryTranslation::create(
    //     // $cat->translations()->create($locale,
    //     [
    //         'category_id' => 5,
    //         'locale' => $locale,
    //         'name' => $request->input("name_$locale"),
    //         // 'content' => $request->input("content_$locale"),
    //     ]);
    // }
        // $post = Category::create(['name'=>'fesefsdfdsf']);

        // foreach ($data['translations'] as $locale => $translationData) {
        //     $post->createTranslation($locale, $translationData);
        // }
        // Category::create(['name'=>'sfsdfdscscscscsf']);
        // $data = [
        //     //'author' => 'Gummibeer',
        //     'en' => ['name' => 'My first post'],
        //     'ar' => ['name' => 'Mon premier post'],
        //   ];
        // //   $post =


        // $request->validate([
        //     // 'title' => 'required',
        //     // 'name' => 'required',
        //     'translations.*.name' => 'required',
        //     // 'translations.*.content' => 'required',
        //     // Other validation rules
        // ]);
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
