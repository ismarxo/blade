<div class="container mx-auto">
    <h1 class="text-5xl leading-tight mb-5 font-black text-gray-800 dark:text-gray-100">
        {!! Blog::getCategoryName() !!}
    </h1>
    <div class="wysiwyg">
        {!! Blog::getCategoryDescription() !!}
    </div>
</div>