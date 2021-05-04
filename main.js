var url = "bd/crud.php";
var appMoviles = new Vue({
    el: '#appMoviles',
    data: {
        moviles:[],
        marca:"",
        modelo:"",
        stock:"",
        total:0,
    },
    methods:{
        // BOTONES
        btnAlta: async function(){
            const {value: formValues} = await Swal.fire({
                title: 'NUEVO',
                html:
                '<div class="row"><label class="col-sm-3 col-form-label">Marca</label><div class="col-sm-7"><input id="marca" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Modelo</label><div class="col-sm-7"><input id="modelo" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">Stock</label><div class="col-sm-7"><input id="stock" type="number" min="0" class="form-control"></div></div>',              
                focusConfirm: false,
                showCancelButton: true,
                confirmButtonText: 'Guardar',          
                confirmButtonColor:'#1cc88a',          
                cancelButtonColor:'#3085d6',  
                preConfirm: () => {            
                    return [
                      this.marca = document.getElementById('marca').value,
                      this.modelo = document.getElementById('modelo').value,
                     this.stock = document.getElementById('stock').value                    
                    ]
                  }
                })        
                if(this.marca == "" || this.modelo == "" || this.stock == 0){
                        Swal.fire({
                          type: 'info',
                          title: 'Datos incompletos',                                    
                        }) 
                }       
                else{          
                  this.altaMovil();          
                  const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      showConfirmButton: false,
                      timer: 3000
                    });
                    Toast.fire({
                      type: 'success',
                      title: '¡Producto Agregado!'
                    })                
                }
            },  
        btnEditar: async function(){},
        btnBorrar: function(){}
    },
    created: function(){},
    computed:{}
});