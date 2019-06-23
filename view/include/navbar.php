            <div class="left-side-menu">
                <div class="slimscroll-menu">
                    <a href="index.html" class="logo text-center">
                        <span class="logo-lg">
                            <img src="<?php echo $domain;?>assets/images/ams.png" alt="" height="30">
                        </span>
                        <span class="logo-sm">
                            <img src="<?php echo $domain;?>assets/images/ams-icon.png" alt="" height="16">
                        </span>
                    </a>
                    <ul class="metismenu side-nav">
                        <li class="side-nav-title side-nav-item">Pengguna</li>
                        <li class="side-nav-item">
                            <a href="<?php domain('dashboard');?>" class="side-nav-link">
                                <i class="dripicons-meter"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="<?php domain('sku');?>" class="side-nav-link">
                                <i class="dripicons-meter"></i>
                                <span> SKU </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="<?php domain('tku-tkk');?>" class="side-nav-link">
                                <i class="dripicons-meter"></i>
                                <span> TKU & TKK </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="<?php domain('materi');?>" class="side-nav-link">
                                <i class="dripicons-meter"></i>
                                <span> Materi </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="<?php domain('tugas');?>" class="side-nav-link">
                                <i class="dripicons-meter"></i>
                                <span> Tugas </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="<?php domain('akun/profil/'.$_SESSION['nis']);?>" class="side-nav-link">
                                <i class="dripicons-meter"></i>
                                <span> Akun </span>
                            </a>
                        </li>
                        <li class="side-nav-title side-nav-item">Dewan Ambalan</li>
                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-view-apps"></i>
                                <span> Surat </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li class="side-nav-item">
                                    <a href="javascript: void(0);" aria-expanded="false">Surat Masuk
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="side-nav-third-level" aria-expanded="false">
                                        <li>
                                            <a href="<?php domain('surat/masuk');?>">Daftar</a>
                                        </li>
                                        <li>
                                            <a href="<?php domain('surat/masuk/tambah');?>">Tambah</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="side-nav-item">
                                    <a href="javascript: void(0);" aria-expanded="false">Surat Keluar
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="side-nav-third-level" aria-expanded="false">
                                        <li>
                                            <a href="<?php domain('surat/keluar');?>">Daftar</a>
                                        </li>
                                        <li>
                                            <a href="<?php domain('surat/keluar/tambah');?>">Tambah</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-copy"></i>
                                <span> Proposal </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="<?php domain('proposal');?>">Daftar Proposal</a>
                                </li>
                                <li>
                                    <a href="<?php domain('proposal/tambah');?>">Tambah Proposal</a>
                                </li>
                            </ul>
                        </li>
                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-copy"></i>
                                <span> LPJ </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="<?php domain('lpj');?>">Daftar LPJ</a>
                                </li>
                                <li>
                                    <a href="<?php domain('lpj/tambah');?>">Tambah LPJ</a>
                                </li>
                            </ul>
                        </li>
                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-copy"></i>
                                <span> Kegiatan </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="<?php domain('kegiatan');?>">Daftar Kegiatan</a>
                                </li>
                                <li>
                                    <a href="<?php domain('kegiatan/tambah');?>">Tambah Kegiatan</a>
                                </li>
                                <li>
                                    <a href="<?php domain('kegiatan/kategori');?>">Kategori Kegiatan</a>
                                </li>
                            </ul>
                        </li>
                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-briefcase"></i>
                                <span> Presensi </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="<?php domain('presensi');?>">Daftar Presensi</a>
                                </li>
                                <li>
                                    <a href="<?php domain('presensi/kelas');?>">Presensi Per-kelas</a>
                                </li>
                                <li>
                                    <a href="<?php domain('presensi/sangga');?>">Presensi Per-sangga</a>
                                </li>
                            </ul>
                        </li>
                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-briefcase"></i>
                                <span> Kelas </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="<?php domain('kelas');?>">Daftar Kelas</a>
                                </li>
                                <li>
                                    <a href="<?php domain('kelas/tambah');?>">Tambah Kegiatan</a>
                                </li>
                            </ul>
                        </li>
                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-briefcase"></i>
                                <span> Sangga </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="<?php domain('sangga');?>">Daftar Sangga</a>
                                </li>
                                <li>
                                    <a href="<?php domain('sangga/tambah');?>">Tambah Sangga</a>
                                </li>
                            </ul>
                        </li>
                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-briefcase"></i>
                                <span> Siswa </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="<?php domain('siswa');?>">Daftar Siswa</a>
                                </li>
                                <li>
                                    <a href="<?php domain('siswa/tambah');?>">Tambah Siswa</a>
                                </li>
                                <li>
                                    <a href="<?php domain('siswa/import');?>">Import Siswa</a>
                                </li>
                            </ul>
                        </li>
                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-briefcase"></i>
                                <span> Alumni </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="<?php domain('alumni');?>">Daftar Alumni</a>
                                </li>
                                <li>
                                    <a href="<?php domain('alumni/tambah');?>">Tambah Alumni</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="help-box text-white text-center">
                        <a href="javascript: void(0);" class="float-right close-btn text-white">
                            <i class="mdi mdi-close"></i>
                        </a>
                        <img src="assets/images/help-icon.svg" height="90" alt="Helper Icon Image" />
                        <h5 class="mt-3">Unlimited Access</h5>
                        <p class="mb-3">Upgrade to plan to get access to unlimited reports</p>
                        <a href="javascript: void(0);" class="btn btn-outline-light btn-sm">Upgrade</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>