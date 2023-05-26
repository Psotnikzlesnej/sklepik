    <link rel="stylesheet" href="styles/manufacturer_checkbox.css">

        <div class="producent">

            <div class="producent__title">Producent</div>


                  <div class="producent__parametr">
                    <div class="producent__checkbox">
                      <label class="checkbox__container">
                          <input type="checkbox">
                          <span class="checkmark">
                              <span class="checkmark2"></span>
                          </span>
                      </label>
                    </div>
                    <div class="producent__nazwa">oaza-memow.pl</div>
                  </div>

                  <div class="producent__parametr">
                    <div class="producent__checkbox">
                      <label class="checkbox__container">
                          <input type="checkbox">
                          <span class="checkmark">
                              <span class="checkmark2"></span>
                          </span>
                      </label>
                    </div>
                    <div class="producent__nazwa">oaza-memow.pl</div>
                  </div>

                  <div class="producent__parametr">
                    <div class="producent__checkbox">
                      <label class="checkbox__container">
                          <input type="checkbox">
                          <span class="checkmark">
                              <span class="checkmark2"></span>
                          </span>
                      </label>
                    </div>
                    <div class="producent__nazwa">oaza-memow.pl</div>
                  </div>

                  <div class="producent__parametr">
                    <div class="producent__checkbox">
                      <label class="checkbox__container">
                          <input type="checkbox">
                          <span class="checkmark">
                              <span class="checkmark2"></span>
                          </span>
                      </label>
                    </div>
                    <div class="producent__nazwa">oaza-memow.pl</div>
                  </div>

                  <div class="producent__parametr">
                    <div class="producent__checkbox">
                      <label class="checkbox__container">
                          <input type="checkbox">
                          <span class="checkmark">
                              <span class="checkmark2"></span>
                          </span>
                      </label>
                    </div>
                    <div class="producent__nazwa">oaza-memow.pl</div>
                  </div>



                      <div class="producent__container hidden">
                    
                            <div class="producent__parametr">
                              <div class="producent__checkbox">
                                <label class="checkbox__container">
                                    <input type="checkbox">
                                    <span class="checkmark">
                                        <span class="checkmark2"></span>
                                    </span>
                                </label>
                              </div>
                              <div class="producent__nazwa">Parametr</div>
                            </div>

                            <div class="producent__parametr">
                              <div class="producent__checkbox">
                                <label class="checkbox__container">
                                    <input type="checkbox">
                                    <span class="checkmark">
                                        <span class="checkmark2"></span>
                                    </span>
                                </label>
                              </div>
                              <div class="producent__nazwa">Parametr</div>
                            </div>

                            <div class="producent__parametr">
                              <div class="producent__checkbox">
                                <label class="checkbox__container">
                                    <input type="checkbox">
                                    <span class="checkmark">
                                        <span class="checkmark2"></span>
                                    </span>
                                </label>
                              </div>
                              <div class="producent__nazwa">Parametr</div>
                            </div>

                            <div class="producent__parametr">
                              <div class="producent__checkbox">
                                <label class="checkbox__container">
                                    <input type="checkbox">
                                    <span class="checkmark">
                                        <span class="checkmark2"></span>
                                    </span>
                                </label>
                              </div>
                              <div class="producent__nazwa">Parametr</div>
                            </div>

                            <div class="producent__parametr">
                              <div class="producent__checkbox">
                                <label class="checkbox__container">
                                    <input type="checkbox">
                                    <span class="checkmark">
                                        <span class="checkmark2"></span>
                                    </span>
                                </label>
                              </div>
                              <div class="producent__nazwa">Parametr</div>
                            </div>

                            <div class="producent__parametr">
                              <div class="producent__checkbox">
                                <label class="checkbox__container">
                                    <input type="checkbox">
                                    <span class="checkmark">
                                        <span class="checkmark2"></span>
                                    </span>
                                </label>
                              </div>
                              <div class="producent__nazwa">Parametr</div>
                            </div>

                            <div class="producent__parametr">
                              <div class="producent__checkbox">
                                <label class="checkbox__container">
                                    <input type="checkbox">
                                    <span class="checkmark">
                                        <span class="checkmark2"></span>
                                    </span>
                                </label>
                              </div>
                              <div class="producent__nazwa">Parametr</div>
                            </div>

                      </div>

        
              
              <div class="show-more">
                  <p id="showMoreButton">więcej (liczba)</p>
              </div>

        </div>
        
        <script>

    document.getElementById('showMoreButton').addEventListener('click', function() {
    var checkboxes = document.querySelectorAll('.producent__container');
    console.log(checkboxes)
    for (var i = 0; i < checkboxes.length; i++) {
        checkboxes[i].classList.remove('hidden');
    }
    this.style.display = 'none';

    });

        </script>
