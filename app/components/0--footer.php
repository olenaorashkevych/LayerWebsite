<div class="footer">
        <div class="container">
            <div class="footer-gray">
                <a href="/" class="footer-logo-link">
                    <img src="./img/logo-color-text.png" alt="" class="footer-logo">

                </a>
                <div class="footer-text-hold">
                    <div class="footer-text-group">
                        <h3 class="footer-text-title">Romina R. Riechwald - Rechtsanwältin</h3>
                        <a href="#" class="footer-text-value">Franz-Joseph-Straße 9 <br> 80801 München</a>
                    </div>
                    <div class="footer-text-group">
                        <h3 class="footer-text-title">Kontakt</h3>
                        <a href="mailto:Rechtsanwalt@Riechwald.de"
                            class="footer-text-value">rechtsanwalt@riechwald.de</a>
                        <a href="tel:+4989334422" class="footer-text-value">+49 89 334 422</a>
                    </div>

                </div>

            </div>
            <div class="footer-black">
                <div class="footer-text-hold">
                    <div class="footer-text-group">
                        <h3 class="footer-text-title">Kanzlei</h3>
                        <a href="#" class="footer-text-value">Romina R. Riechwald </a>
                        <a href="#" class="footer-text-value">Rudolf P. B. Riechwald </a>
                    </div>
                    <div class="footer-text-group">
                        <h3 class="footer-text-title">Kompetenzen</h3>
                        <a href="#" class="footer-text-value"> Hochschulrecht</a>
                        <a href="#" class="footer-text-value"> Studienplatzklage</a>
                        <a href="#" class="footer-text-value"> Prüfungsrecht</a>
                        <a href="#" class="footer-text-value"> Schulrecht</a>
                        <a href="#" class="footer-text-value"> Verwaltungsrecht</a>

                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Order call -->
    <span class="btn-play-animate" data-bs-toggle="modal" data-bs-target="#order-call-modal">
        <span class="btn-play-animate__icon-hold">
            <span class="btn-play-animate__icon-smile"></span>
            <span class="btn-play-animate__icon anim-shake"></span>
        </span>
        <span class="btn-play-animate__ring-hold">
            <span class="btn-play-animate__ring"></span>
        </span>
    </span>



    <!-- Modal -->
    <div class="modal fade modal-order-call" id="order-call-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Termin vereinbaren</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="form-order-call">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control form-control-lg" id="input-name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Telefone</label>
                            <input type="tel" name="phone" class="form-control form-control-lg" id="input-phone">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email </label>
                            <input type="email" name="email" class="form-control form-control-lg" id="input-email"
                                placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Message(optional)</label>
                            <textarea name="message" class="form-control form-control-lg" id="input-message"
                                rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Termin vereinbaren</button>
                    </form>

                    <div class="success-state text-center py-4 d-none">
                        <img src="./img/check.png" alt="" width="100" class="mb-4">
                        <h1 class="fs-2">Danke für die Kontaktaufnahme</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div hidden="hidden" style="display: none;">
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="icon-search" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </symbol>

            <symbol id="icon-arrow" viewBox="0 0 24 24" fill="none">
                <path d="M9 18L15 12L9 6" stroke="black" stroke-opacity="0.5" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </symbol>




        </svg>
    </div>



    <script src="./libs/boostrap/js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>