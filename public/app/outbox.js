var outbox = {
        init: function(){
    $('#outboxTable').DataTable(
        {
    search: true
}

    );

    console.log("Table configured?");
    console.log($('#outboxTable'));
        }
    
};