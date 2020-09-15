function cry(){
    // If no image is chosen and the submit button is pressed, the alert will come up
    // and refresh the site thus cancelling the upload. If you have a smarter way of doing this
    // then feel free to clean up.
    var nme = document.getElementById("fileToUpload");
    if(nme.value.length < 4) {
        alert('Upload was cancelled. No image was chosen.');
        nme.focus();
        location.reload();
        return false;
    }

}
