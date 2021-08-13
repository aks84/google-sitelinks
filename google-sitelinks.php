<?php
   /*
   Plugin Name: Google Sitelinks
   Plugin URI: https://tubemint.com/google-sitelinks-pagelinks/
   description: This plugin adds Google Sitelinks and Search-box schema markup in JSON-LD format to wordpress sites and stores.
   Version: 1.0
   Author: Amulya Shahi
   Author URI: https://tubemint.com
   License: GPL2
   */


   function addGoogleSiteLinks(){
         
   ?>
         
       <!-- Google Sitelinks and Searchbox added by TubeMint -->
         <script type="application/ld+json">
          {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "url": "https://www.tubemint.com/",

            "potentialAction": {
               "@type": "SearchAction",
               "target": {
                  "@type": "EntryPoint",
                  "urlTemplate": "https://www.tubemint.com/?s={search_term_string}"
                              
                           },
                  "query-input": "required name=search_term_string"
            }
      }
   </script>


<?php
}


add_action( 'wp_head', 'addGoogleSiteLinks',2);

