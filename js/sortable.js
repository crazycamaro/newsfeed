$( function() {
    $( "#sortable" ).sortable({
        axis: 'y',

        update: function(){

            var IDS = [];
            $.map( $(this).find('li'), function( el ) {
                // Do something

                var itemID = el.id;
                IDS.push(itemID);


                //console.log('IDS');
                //$.ajax({
                //    url: '/sortMenu',
                //    type: 'POST',
                //    dataType: 'json',
                //    data: {itemID: itemID},
                //})
            });

            console.log(IDS);
            var json = JSON.stringify(IDS);
            $.ajax({
                url: '/sortMenu/',
                type: 'GET',
                dataType: 'json',
                data: {json: json},
            })

        }
    });

});