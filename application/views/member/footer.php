<!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="<?=base_url();?>admin_assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="<?=base_url();?>admin_assets/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="<?=base_url();?>admin_assets/js/jquery.metisMenu.js"></script>
<!-- MORRIS CHART SCRIPTS -->
<script src="<?=base_url();?>admin_assets/js/morris/raphael-2.1.0.min.js"></script>
<!--<script src="--><?//=base_url();?><!--admin_assets/js/morris/morris.js"></script>-->
<!-- CUSTOM SCRIPTS -->
<!--<script src="--><?//=base_url();?><!--admin_assets/js/custom.js"></script>-->




<!-- Include jQuery. -->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script src="<?=base_url();?>admin_assets/js/moment.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>admin_assets/js/fullcalendar.min.js"></script>

<script src="<?=base_url();?>admin_assets/js/daterangepicker.js"></script>

<!-- Tinymce config-->

<!--    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>-->
<script type="text/javascript">
   $(document).ready(function() {
    $('input[name="start_date"]').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        locale: {
            format: 'YYYY-MM-DD'
        }
    });
    $('input[name="end_date"]').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        locale: {
            format: 'YYYY-MM-DD'
        }
    });
    $('input[name="tanggal_berlaku"]').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        locale: {
            format: 'YYYY-MM-DD'
        }
    });
    $('input[name="tanggal_jatuh_tempo"]').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        locale: {
            format: 'YYYY-MM-DD'
        }
    });
});
</script>
<script src="<?=base_url();?>admin_assets/tinymce/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: "textarea",theme: "modern",height: 500,
        plugins: [
        "advlist autolink link image lists charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
        "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
        ],
        toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
        toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
        image_advtab: true ,

        external_filemanager_path:"<?=base_url();?>admin_assets/filemanager/",
        filemanager_title:"Responsive Filemanager" ,
        external_plugins: { "filemanager" : "<?=base_url();?>admin_assets/filemanager/plugin.min.js"}
    });


</script>

<!--END tinymce config-->


<!-- WYSIWYG config-->

<!-- Include JS files. -->
<!--<script type="text/javascript" src="--><?//=base_url();?><!--admin_assets/wysiwyg/js/froala_editor.min.js"></script>-->

<!-- Include Code Mirror. -->
<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>-->
<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>-->

<!-- Include Plugins. -->
<!--<script type="text/javascript" src="--><?//=base_url();?><!--admin_assets/wysiwyg/js/plugins/align.min.js"></script>-->
<!--<script type="text/javascript" src="--><?//=base_url();?><!--admin_assets/wysiwyg/js/plugins/char_counter.min.js"></script>-->
<!--<script type="text/javascript" src="--><?//=base_url();?><!--admin_assets/wysiwyg/js/plugins/code_beautifier.min.js"></script>-->
<!--<script type="text/javascript" src="--><?//=base_url();?><!--admin_assets/wysiwyg/js/plugins/code_view.min.js"></script>-->
<!--<script type="text/javascript" src="--><?//=base_url();?><!--admin_assets/wysiwyg/js/plugins/colors.min.js"></script>-->
<!--<script type="text/javascript" src="--><?//=base_url();?><!--admin_assets/wysiwyg/js/plugins/emoticons.min.js"></script>-->
<!--<script type="text/javascript" src="--><?//=base_url();?><!--admin_assets/wysiwyg/js/plugins/entities.min.js"></script>-->
<!--<script type="text/javascript" src="--><?//=base_url();?><!--admin_assets/wysiwyg/js/plugins/file.min.js"></script>-->
<!--<script type="text/javascript" src="--><?//=base_url();?><!--admin_assets/wysiwyg/js/plugins/font_family.min.js"></script>-->
<!--<script type="text/javascript" src="--><?//=base_url();?><!--admin_assets/wysiwyg/js/plugins/font_size.min.js"></script>-->
<!--<script type="text/javascript" src="--><?//=base_url();?><!--admin_assets/wysiwyg/js/plugins/fullscreen.min.js"></script>-->
<!--<script type="text/javascript" src="--><?//=base_url();?><!--admin_assets/wysiwyg/js/plugins/image.min.js"></script>-->
<!--<script type="text/javascript" src="--><?//=base_url();?><!--admin_assets/wysiwyg/js/plugins/image_manager.min.js"></script>-->
<!--<script type="text/javascript" src="--><?//=base_url();?><!--admin_assets/wysiwyg/js/plugins/inline_style.min.js"></script>-->
<!--<script type="text/javascript" src="--><?//=base_url();?><!--admin_assets/wysiwyg/js/plugins/line_breaker.min.js"></script>-->
<!--<script type="text/javascript" src="--><?//=base_url();?><!--admin_assets/wysiwyg/js/plugins/link.min.js"></script>-->
<!--<script type="text/javascript" src="--><?//=base_url();?><!--admin_assets/wysiwyg/js/plugins/lists.min.js"></script>-->
<!--<script type="text/javascript" src="--><?//=base_url();?><!--admin_assets/wysiwyg/js/plugins/paragraph_format.min.js"></script>-->
<!--<script type="text/javascript" src="--><?//=base_url();?><!--admin_assets/wysiwyg/js/plugins/paragraph_style.min.js"></script>-->
<!--<script type="text/javascript" src="--><?//=base_url();?><!--admin_assets/wysiwyg/js/plugins/quick_insert.min.js"></script>-->
<!--<script type="text/javascript" src="--><?//=base_url();?><!--admin_assets/wysiwyg/js/plugins/quote.min.js"></script>-->
<!--<script type="text/javascript" src="--><?//=base_url();?><!--admin_assets/wysiwyg/js/plugins/table.min.js"></script>-->
<!--<script type="text/javascript" src="--><?//=base_url();?><!--admin_assets/wysiwyg/js/plugins/save.min.js"></script>-->
<!--<script type="text/javascript" src="--><?//=base_url();?><!--admin_assets/wysiwyg/js/plugins/url.min.js"></script>-->
<!--<script type="text/javascript" src="--><?//=base_url();?><!--admin_assets/wysiwyg/js/plugins/video.min.js"></script>-->

<!-- Include Language file if we want to use it. -->
<!--<script type="text/javascript" src="--><?//=base_url();?><!--admin_assets/wysiwyg/js/languages/ro.js"></script>-->

<!--<script>-->
<!--    $(function() {-->
<!--        $('#edit').froalaEditor();-->
<!--    });-->
<!--</script>-->
<!-- END WYSIWYG config-->

<!--<script type="text/javascript" src="--><?//=base_url()?><!--admin_assets/tinymce/tinymce.min.js"></script>-->
<!--<script>-->
<!--	tinyMCE.init({-->
<!--		// General options-->
<!--		mode : "textareas",-->
<!--		theme : "advanced",-->
<!--		elements : "elm1",-->
<!--		skin : "o2k7",-->
<!--		skin_variant : "silver",-->
<!--		plugins : "pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",-->
<!---->
<!--		// Theme options-->
<!--		theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",-->
<!--		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,code,|,insertdate,inserttime,preview",-->
<!--		theme_advanced_buttons3 : "hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,fullscreen,|,insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,|,forecolor,backcolor",-->
<!--		theme_advanced_buttons4 : "",-->
<!--		theme_advanced_toolbar_location : "top",-->
<!--		theme_advanced_toolbar_align : "left",-->
<!--		theme_advanced_statusbar_location : "bottom",-->
<!--		theme_advanced_resizing : true,-->
<!---->
<!--		// Example content CSS (should be your site CSS)-->
<!--		content_css : "",-->
<!---->
<!--		// Drop lists for link/image/media/template dialogs-->
<!--		template_external_list_url : "lists/template_list.js",-->
<!--		external_link_list_url : "lists/link_list.js",-->
<!--		external_image_list_url : "lists/image_list.js",-->
<!--		media_external_list_url : "lists/media_list.js",-->
<!---->
<!--		// Style formats-->
<!--		style_formats : [-->
<!--		{title : 'Bold text', inline : 'b'},-->
<!--		{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},-->
<!--		{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},-->
<!--		{title : 'Example 1', inline : 'span', classes : 'example1'},-->
<!--		{title : 'Example 2', inline : 'span', classes : 'example2'},-->
<!--		{title : 'Table styles'},-->
<!--		{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}-->
<!--		],-->
<!---->
<!--		// Replace values for the template plugin-->
<!--		template_replace_values : {-->
<!--			username : "Some User",-->
<!--			staffid : "991234"-->
<!--		}-->
<!--	});-->
<!--</script>-->

</body>
</html>
