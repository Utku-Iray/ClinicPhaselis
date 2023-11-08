<?php
session_start();

if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = "en";
} else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {

    if ($_GET['lang'] == "en") {
        $_SESSION['lang'] = "en";
    } else  if ($_GET['lang'] == "tr") {
        $_SESSION['lang'] = "tr";
    } else  if ($_GET['lang'] == "fr") {
        $_SESSION['lang'] = "fr";
    }
}


require_once "lang/" . $_SESSION['lang'] . ".php";
//Blog
$langBlogTitle = "blog_title_" . $_SESSION['lang'];
$langBlogDescription = "blog_description_" . $_SESSION['lang'];
$langBlogContent = "blog_content_" . $_SESSION['lang'];
// Treatment
$langTreatmentName = "treatment_name_" . $_SESSION['lang'];
$langTreatmentDescription = "treatment_description_" . $_SESSION['lang'];
$langTreatmentContent = "treatment_details_" . $_SESSION['lang'];
$langFaq = "treatment_faq_" . $_SESSION['lang'];
$langAnswer = "treatment_answer_" . $_SESSION['lang'];
$langTreatmentLink = "treatment_link_" . $_SESSION['lang'];

$langQuery = $_GET;

$selectedLang = $_SESSION['lang'];
