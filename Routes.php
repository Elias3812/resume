<?php
Route::set('',function(){
    Index::CreateView("Index");
});
Route::set('skill-page',function(){
    SkillPage::CreateView("SkillPage");
});



?>