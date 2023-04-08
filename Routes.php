<?php
Route::set('index.php',function(){
    Index::CreateView("Index");
});
Route::set('skill-page',function(){
    SkillPage::CreateView("SkillPage");
});

?>