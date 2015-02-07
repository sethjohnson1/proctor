//this is for all the select2 boxes . . very easy
 $(document).ready(function() {
 $("#CastingArtworkId").select2({
	placeholder: "Select a Bronze",
	allowClear: true,
	width: "1000px"
 }); 
 $("#CastingOwnerId").select2({
 	placeholder: "Select an Owner",
	allowClear: true,
	width: "1000px"
 }); 
 $("#CastingPlasterId").select2({
 	placeholder: "Select a Plaster",
	allowClear: true,
	width: "1000px"
 }); 
 
 $("#ExhibitExhibit").select2({
    placeholder: "Select Exhibits",
	allowClear: false,
	width: "1000px"
});
 
 });