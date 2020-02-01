<div class="container">
    <h1 class="my-5">Bem vindo</h1>
    <div class="row my-5">
        <div class="col-md-3">
            <div class="card box">
                <div class="card-body text-center">
                    <span class="counter"><?= $users ?></span>
                    <svg class="bi bi-person-fill" width="4em" height="4em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M5 16s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H5zm5-6a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
                    </svg>
                    <p><?= $this->Html->link('Usuários', 'users') ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card box">
                <div class="card-body text-center">
                    <span class="counter"><?= $categories ?></span>
                    <svg class="bi bi-tag-fill" width="4em" height="4em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M4 3a1 1 0 00-1 1v4.586a1 1 0 00.293.707l7 7a1 1 0 001.414 0l4.586-4.586a1 1 0 000-1.414l-7-7A1 1 0 008.586 3H4zm4 3.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" clip-rule="evenodd"></path>
                    </svg>
                    <p><?= $this->Html->link('Categorias', 'categories') ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card box">
                <div class="card-body text-center">
                    <span class="counter"><?= $payments ?></span>
                    <svg class="bi bi-credit-card" width="4em" height="4em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M16 5H4a1 1 0 00-1 1v8a1 1 0 001 1h12a1 1 0 001-1V6a1 1 0 00-1-1zM4 4a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2H4z" clip-rule="evenodd"></path>
                      <rect width="3" height="3" x="4" y="11" rx="1"></rect>
                      <path d="M3 7h14v2H3z"></path>
                    </svg>
                    <p><?= $this->Html->link('Pagamentos', 'payments') ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card box">
                <div class="card-body text-center">
                    <span class="counter"><?= $receivements ?></span>
                    <svg class="bi bi-document-text" width="4em" height="4em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M6 3h8a2 2 0 012 2v10a2 2 0 01-2 2H6a2 2 0 01-2-2V5a2 2 0 012-2zm0 1a1 1 0 00-1 1v10a1 1 0 001 1h8a1 1 0 001-1V5a1 1 0 00-1-1H6z" clip-rule="evenodd"></path>
                      <path fill-rule="evenodd" d="M6.5 14a.5.5 0 01.5-.5h3a.5.5 0 010 1H7a.5.5 0 01-.5-.5zm0-2a.5.5 0 01.5-.5h6a.5.5 0 010 1H7a.5.5 0 01-.5-.5zm0-2a.5.5 0 01.5-.5h6a.5.5 0 010 1H7a.5.5 0 01-.5-.5zm0-2a.5.5 0 01.5-.5h6a.5.5 0 010 1H7a.5.5 0 01-.5-.5zm0-2a.5.5 0 01.5-.5h6a.5.5 0 010 1H7a.5.5 0 01-.5-.5z" clip-rule="evenodd"></path>
                    </svg>
                    <p><?= $this->Html->link('Recebimentos', 'receivements') ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
