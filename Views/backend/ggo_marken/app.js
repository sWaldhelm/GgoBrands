Ext.define('Shopware.apps.GgoMarken', {
    extend: 'Enlight.app.SubApplication',
 
    name:'Shopware.apps.GgoMarken',
 
    loadPath: '{url action=load}',
    bulkLoad: true,
 	
    controllers: [ 'Main' ],
 
    views: [
        'list.Window',
        'list.Brand',
        'detail.Window',
        'detail.Brand'
    ],
 
    models: [ 'Brand' ],
    stores: [ 'Brand' ],
 
    launch: function() {
        return this.getController('Main').mainWindow;
    }
});
 