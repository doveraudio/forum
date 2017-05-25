var inbox = {
        init: function(){
    $('#inboxTable').DataTable(
        {
    search: true
}

    );

    console.log("Table configured?");
    console.log($('#inboxTable'));
        }
    
};