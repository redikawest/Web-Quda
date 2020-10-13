<div id="sidebar-nav" class="sidebar">
            <div class="sidebar-scroll">
                <nav>
                    <ul class="nav">
                        <li><a href="/PL-Kuda/dashboard" ><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                        <li><a href="/PL-Kuda/mhorse" class=""><i class="lnr lnr-layers"></i> <span>Manage Horse</span></a></li>
                       <?php if(auth()->user()->role=='admin'): ?>
                      
                        <li><a href="/PL-Kuda/mevent" class=""><i class="lnr lnr-calendar-full"></i> <span>Manage Event</span></a></li>
                        <li><a href="/PL-Kuda/mhorse" class=""><i class="lnr lnr-layers"></i> <span>Manage Horse</span></a></li>
                        <li><a href="/PL-Kuda/mnews" class=""><i class="lnr lnr-text-align-justify"></i> <span>Manage News</span></a></li>
                        <li><a href="/PL-Kuda/mmember" class=""><i class="lnr lnr-user"></i> <span>Manage Member</span></a></li>
                    <?php endif; ?>
                    </ul>
                </nav>
            </div>
        </div><?php /**PATH C:\xampp\htdocs\PL-KUDA\resources\views/layouts/includes/_sidebar.blade.php ENDPATH**/ ?>