<script type="text/javascript">
	$(document).ready(function(){ 
		//fill data to tree  with AJAX call
		$('#jstree-categories').jstree({
			'plugins': ["wholerow"],
			'core' : {
				'data' : {
					"url" : "function/build_jstree.php",
					"dataType" : "json" // needed only if you do not supply JSON headers,
				}
			}
		}).bind("select_node.jstree", function (e, data) {
			var href = data.node.a_attr.href;
			if (href == '#')
				return '';
			document.location.href = href;
		}); 
		
		/*$('#jstree-categories').on('activate_node.jstree', function(e, data) {
			if(data.instance.is_leaf(data.node)) {
				alert("Leaf: " + data.node.text);
				alert("Parent: " +  data.instance.get_node(data.node.parent).text);
			}
		});*/
		
		/*.bind("select_node.jstree", function (e, data) {
			var href = data.node.a_attr.href;
			document.location.href = href;
		});*/
		//.bind("select_node.jstree", function (e, data) {
		// Allow links to work from within jstree nodes
		//window.open( jQuery(data.event.originalEvent.originalTarget).attr('href'), '_blank');
	});
</script>

