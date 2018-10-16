
        <div class="col-lg-3 ds">
                    <!--COMPLETED ACTIONS DONUTS CHART-->


                    <!-- ALUNO -->
                  @if(Auth::user()->hasRole('aluno'))
                  <?php
                    $id = Auth::user()->id;
                    $nome = Auth::user()->name;
                  ?>
                    
                    <h3>NOTIFICAÇÕES</h3>          
                      <!-- First Action -->
                      @foreach($alunosSidebar as $a)
                      <div class="desc">
                        <div class="thumb">
                          <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                          <p>
                             <a href="#">{{ $a->name }}</a> entrou para o Musicali.<br/>
                          </p>
                        </div>
                      </div>
                      @endforeach

                    <h3>PROFESSORES</h3>
                      <!-- First Action -->
                      @foreach ($professoresSidebar as $p)
                      <div class="desc">
                        <div class="thumb">
                          <img class="img-circle" src="/uploads/avatars/{{ $p->avatar }}" width="35px" height="35px" align="">
                        </div>
                        <div class="details">
                          <p><a href="#">{{ $p->name }}</a><br/>
                             <!--<muted>Available</muted>-->
                          </p>
                        </div>
                      </div>
                      @endforeach

                  @endif
                  <!-- ADMINISTRADOR -->
                  @if(Auth::user()->hasRole('administrador'))
                  <?php
                    $id = Auth::user()->id;
                    $nome = Auth::user()->name;
                  ?>

                    <h3>NOTIFICAÇÕES</h3>
                      <!-- First Action -->
                      @foreach($alunosSidebar as $a)
                      <div class="desc">
                        <div class="thumb">
                          <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                          <p>
                             <a href="#">{{ $a->name }}</a> entrou para o Musicali.<br/>
                          </p>
                        </div>
                      </div>
                      @endforeach

                    <h3>PROFESSORES</h3>
                      <!-- First Action -->
                      @foreach ($professoresSidebar as $p)
                      <div class="desc">
                        <div class="thumb">
                          <img class="img-circle" src="/uploads/avatars/{{ $p->avatar }}" width="35px" height="35px" align="">
                        </div>
                        <div class="details">
                          <p><a href="#">{{ $p->name }}</a><br/>
                             <!--<muted>Available</muted>-->
                          </p>
                        </div>
                      </div>
                      @endforeach

                  @endif
                  <!-- PROFESSOR -->
                  @if(Auth::user()->hasRole('professor'))
                  <?php
                    $id = Auth::user()->id;
                    $nome = Auth::user()->name;
                  ?>

                    <h3>NOTIFICAÇÕES</h3>
                      <!-- First Action -->
                      @foreach($alunosSidebar as $a)
                      <div class="desc">
                        <div class="thumb">
                          <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                          <p>
                             <a href="#">{{ $a->name }}</a> entrou para o Musicali.<br/>
                          </p>
                        </div>
                      </div>
                      @endforeach

                    <h3>PROFESSORES</h3>
                      <!-- First Action -->
                      @foreach ($professoresSidebar as $p)
                      <div class="desc">
                        <div class="thumb">
                          <img class="img-circle" src="/uploads/avatars/{{ $p->avatar }}" width="35px" height="35px" align="">
                        </div>
                        <div class="details">
                          <p><a href="#">{{ $p->name }}</a><br/>
                             <!--<muted>Available</muted>-->
                          </p>
                        </div>
                      </div>
                      @endforeach


                  @endif

                   <!-- OPERADOR -->
                  @if(Auth::user()->hasRole('operador'))
                  <?php
                    $id = Auth::user()->id;
                    $nome = Auth::user()->name;
                  ?>

                    <h3>NOTIFICAÇÕES</h3>
                      <!-- First Action -->
                      @foreach($alunosSidebar as $a)
                      <div class="desc">
                        <div class="thumb">
                          <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                          <p>
                             <a href="#">{{ $a->name }}</a> entrou para o Musicali.<br/>
                          </p>
                        </div>
                      </div>
                      @endforeach

                    <h3>PROFESSORES</h3>
                      <!-- First Action -->
                      @foreach ($professoresSidebar as $p)
                      <div class="desc">
                        <div class="thumb">
                          <img class="img-circle" src="/uploads/avatars/{{ $p->avatar }}" width="35px" height="35px" align="">
                        </div>
                        <div class="details">
                          <p><a href="#">{{ $p->name }}</a><br/>
                             <!--<muted>Available</muted>-->
                          </p>
                        </div>
                      </div>
                      @endforeach

                  @endif

            

                      
        </div><!-- /col-lg-3 -->
