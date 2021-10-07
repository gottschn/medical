<div class="modal fade"  id="signupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">         
                    <h5 class="modal-title text-center mb-5 fw-light fs-5 " id="exampleModalLabel">Iniciar sesión</h5>
                </div>
                <div class="modal-body">
                    <form id="signup-form">
                          <div class="d-grid mb-2">
                            <a href="{{route('login.google')}}" class="btn btn-google btn-login text-uppercase fw-bold" type="submit">
                              <i class="fab fa-google me-2"></i> Iniciar sesión con Google
                            </a>
                          </div>

                          <div class="d-grid mb-2">
                            <a href="{{route('login.facebook')}}" class="btn btn-facebook btn-login text-uppercase fw-bold" type="submit">
                              <i class="fab fa-facebook-f me-2"></i>Iniciar sesión con Facebook
                            </a>
                          </div>
                          <hr class="my-4">
                    </form>
                </div>
            </div>
        </div>
    </div>