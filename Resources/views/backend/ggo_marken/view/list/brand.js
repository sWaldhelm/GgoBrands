Ext.define('Shopware.apps.GgoMarken.view.list.Brand', {
    extend: 'Shopware.grid.Panel',
    alias:  'widget.brand-listing-grid',
    region: 'center',
    
    configure: function() {
        return {
            detailWindow: 'Shopware.apps.GgoMarken.view.detail.Window'
        };
    }

});