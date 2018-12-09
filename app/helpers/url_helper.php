<?php

// Simple page REDIRECT
    function redirect($page){
         header('location: ' . URLROOT . '/' . $page);
    }

