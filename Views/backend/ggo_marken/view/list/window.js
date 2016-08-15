Ext.define('Shopware.apps.GgoMarken.view.list.Window', {
    extend: 'Shopware.window.Listing',
    alias: 'widget.brand-list-window',
    height: 450,
    title : '{s name=window_title}Marken{/s}',
 
    configure: function() {
        return {
            listingGrid: 'Shopware.apps.GgoMarken.view.list.Brand',
            listingStore: 'Shopware.apps.GgoMarken.store.Brand'
        };
    }
});