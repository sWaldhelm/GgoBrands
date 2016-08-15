Ext.define('Shopware.apps.GgoMarken.store.Brand', {
    extend:'Shopware.store.Listing',
 
    configure: function() {
        return {
            controller: 'GgoMarken'
        };
    },
    model: 'Shopware.apps.GgoMarken.model.Brand'
});
 