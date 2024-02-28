function clicked(e) {
    if(!confirm('Send contact information and message?')) {
        e.preventDefault();
    }
}