 <form id="possitivelForm" method="POST" action="{{ url('/processar-formulario') }}">
     @csrf
     <div class="fields">
         <div class="field name">
             <input type="text" maxlength="100" name="nome" placeholder="Digite seu nome" required>
         </div>
         <div class="field tel">
             <input type="text" id="telefone" name="telefone" placeholder="Digite seu telefone" required>
         </div>
     </div>
     <div class="field">
         <input type="email" maxlength="100" name="email" placeholder="Digite seu email" required>
     </div>
     <div class="field textarea">
         <textarea cols="30" rows="10" name="mensagem" placeholder="O que deseja?" required></textarea>
     </div>
     <div class="button-area">
         <button type="submit">Enviar</button>
     </div>
 </form>



 <script>
     const form = document.querySelector('#possitivelForm');
     form.addEventListener('submit', function(event) {
         event.preventDefault();
         const emailInput = document.querySelector('#possitivelForm input[name="email"]');
         const nameInput = document.querySelector('#possitivelForm input[name="name"]');

         Swal.fire({
             icon: 'success',
             title: 'Bom trabalho!',
             text: 'Sua ação foi bem sucedida!',
             allowOutsideClick: true,
             allowEscapeKey: true,
             iconColor: 'crimson',
             confirmButtonColor: 'crimson'
         }).then(() => {
             // Submeter o formulário após o modal ser fechado
             form.submit();
         });
     });
 </script>
