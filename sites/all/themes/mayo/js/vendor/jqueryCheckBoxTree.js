/**
 * Created with JetBrains PhpStorm.
 * User: Kostia
 * Date: 22.10.13
 * Time: 18:24
 * To change this template use File | Settings | File Templates.
 */
checkboxAutoCollapse = function(){
    jQuery("ul.bef-tree li:has(input[type=checkbox]:not(:checked)):has(ul) ul:not(:has(input[type=checkbox]:checked))").hide()

    jQuery("ul.bef-tree li:has(ul)").click(function(event){

            jQuery(this).children('ul').toggle("fast");
            event.stopPropagation();

        }

    );

    jQuery("ul.bef-tree li:has(ul) ul").click(function(event){

            event.stopPropagation();

        }

    );

    jQuery("ul.bef-tree li:has(ul)>div input[type=checkbox]").click(function(event){

            jQuery(this).parents('li').
                find('input[type=checkbox]').attr('checked',jQuery(this).is(':checked'));
            if(jQuery(this).is(':checked')){
            	jQuery(this).parent().siblings('ul').show();
            	event.stopPropagation();
            }
        }
    );

}
jQuery(document).ready(checkboxAutoCollapse);
