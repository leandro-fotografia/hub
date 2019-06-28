<!--==========================
    Footer
  ============================-->
    <footer id="footer">

    </footer><!-- #footer -->




    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">                          
                    <button type="button" class="close text-right pr-3" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                
                <div class="modal-body">
                    <form>
                            <div class="form-group">
                                    <label for="inputAddress">Nome Completo</label>
                                    <input type="text" class="form-control" id="nome" placeholder="José silverio">
                                </div>    
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Senha</label>
                                <input type="password" class="form-control" id="inputPassword4" placeholder="Senha">
                            </div>
                        </div>
                                            
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Cidade</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEstado">Estado</label>
                                <select id="inputEstado" class="form-control">
                                    <option selected>Escolher...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Aceito receber noticias e sugestões.
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Começar o teste</button>
                    </form>
                    
                </div>                
            </div>
        </div>
    </div>
    <script>
        (function($){
            $('#exampleModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var recipient = button.data('whatever') // Extract info from data-* attributes
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var modal = $(this)
                modal.find('.modal-title').text('New message to ' + recipient)
                modal.find('.modal-body input').val(recipient)
            })
        })(jQuery);
    </script>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->
</body>

</html>