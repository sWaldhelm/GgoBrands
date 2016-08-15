Ext.define('Shopware.apps.GgoMarken.model.Brand', {
    extend: 'Shopware.data.Model',
 
    configure: function() {
        return {
            controller: 'GgoMarken',
            detail: 'Shopware.apps.GgoMarken.view.detail.Brand'
        };
    },
 
    fields: [
        { name : 'id', type: 'int', useNull: true },
        { name : 'name', type: 'string' },
        { name : 'active', type: 'boolean' },
        { name : 'link', type: 'string'},
        { name : 'description', type: 'string'},
        { name : 'meta_title', type: 'string'},
        { name : 'meta_description', type: 'string'},
        { name : 'meta_keywords', type: 'string'},
    ]
});
 