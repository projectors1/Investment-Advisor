<?php
      function hideDanger() {
        echo '<script type="text/javascript">window.setTimeout(function() {
        $("#alert_danger").slideUp(500, function(){
        $(this).html("");
        $(this).css("display", "block");    
        });
        }, 5000);</script>';
      }
      
      function hideSuccess(){
        echo '<script type="text/javascript">window.setTimeout(function() {
        $("#alert_success").slideUp(500, function(){
        $(this).html("");
        $(this).css("display", "block");    
        });
        }, 5000);</script>';
      }
?>