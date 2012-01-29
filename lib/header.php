<?php
date_default_timezone_set('America/Los_Angeles');

// Show all errors:
error_reporting(E_ALL);

//Turn on GZIP if the server isn't configured this way.
ob_start("ob_gzhandler");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Chirped.it</title>
  <meta charset="UTF-8">
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta http-equiv="expires" content="0">
  <meta name="description" content="Chird.it is for when twitter is too slow">
  <meta name="keywords" content="twitter, chat, swsj, startup-weekend-san-jose, #SWSJ">
  <meta property="og:title" content="Chirped.it - faster discussion for when twitter can't take the heat" />
  <meta property="og:type" content="company" />
  <meta property="og:site_name" content="Chirped.it" />
  <meta property="og:url" content="http://www.Chirped.it" />
  <meta property="og:description" content="Chirped.it from StartupWeekend San Jose is launching by tonight.. and I'm first in line!" />

  <style type="text/css">
    /*reset css from yui*/
    body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,
    form,fieldset,input,textarea,p,blockquote,th,td{ 
      margin:0;
      padding:0;
    }
    table {
      border-collapse:collapse;
      border-spacing:0;
    }
    fieldset,img { 
      border:0;
    }
    address,caption,cite,code,dfn,em,strong,th,var {
      font-style:normal;
      font-weight:normal;
    }
    ol,ul {
      list-style:none;
    }
    caption,th {
      text-align:left;
    }
    h1,h2,h3,h4,h5,h6 {
      font-size:100%;
      font-weight:normal;
    }
    q:before,q:after {
      content:'';
    }
    abbr,acronym { border:0;
    }
    html {
      -moz-font-smoothing:antialiased !important;
      -o-font-smoothing:antialiased !important;
      -webkit-font-smoothing:antialiased !important;
      -ms-font-smoothing:antialiased !important;
      font-smoothing:antialiased !important;
      font-family:"Myriad Pro", "Lucida Grande","Lucida Sans Unicode",Helvetica,Arial,Verdana,sans-serif;
    }
    ::selection, ::-moz-selection, ::-webkit-selection {
      background: #549A2F;
      color: white;
    }
    a {
      text-decoration: none;
    }
    a:hover {
      text-decoration: underline;
    }
  </style>
  <script type="text/javascript">
    //Devin's DOM method wrappers (faster than jQuery!)
    window.d = {};
    window.doc = document;
    d.id = function(el) {
      return doc.getElementById(el);
    }
    d.class = function(el) {
      return doc.getElementsByClassName(el);
    }
    
    /* Gen.js: some stupid simple javascript functions
     * Assumes you aren't using jQuery
     * By Devin Rhode @DevinRhode2 */
    
    /* GET Example Call:
     * GET('http://thescouapp.com/X/genjs.json', function(response){
     *   console.error(response);
     * });
     *
     * Notes:
     * A third options param would be nice to handle this and other things. We could also mimic the jQuery api...*/
    function GET(url, callback) {
      var xmlhttp = new XMLHttpRequest();
      
      //prevent caching
      if (url.indexOf('?') > -1) {
        xmlhttp.open("GET",url + '&nocache='+Date.now() ,true);
      } else {
        xmlhttp.open("GET",url + '?nocache='+Date.now() ,true);
      }
      
      xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState === 4) {
          if (xmlhttp.status === 200) {
            var resp = xmlhttp.responseText;
            if (typeof callback !== 'undefined') {
              try {
                if (resp.indexOf('{') === 0) {
                  callback(JSON.parse(xmlhttp.responseText));
                } else {
                  callback(xmlhttp.responseText);
                }
              } catch(e) { console.error(e); }
            } else {
              console.error(xmlhttp.responseText);
            }
          } else {
            console.error('GET error for: ' + url);
            console.error('xhr:');
            console.error(xmlhttp);
          }
        }
      }
      xmlhttp.send();
    }
  </script>
  