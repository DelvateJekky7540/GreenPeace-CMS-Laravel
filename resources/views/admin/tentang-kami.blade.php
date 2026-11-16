@extends('tailadmin.layouts.app')

@section('content')
    <x-common.page-breadcrumb pageTitle="Tentang Kami" />

    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        @if (session('success'))
            <div class="mb-4 rounded-lg bg-success-50 px-4 py-3 text-sm text-success-500 dark:bg-success-500/15 dark:text-success-500">
                {{ session('success') }}
            </div>
        @endif

        {{-- Container Tab --}}
        <div x-data="{ selectedTab: 'tentang' }" class="rounded-xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-gray-900">
            
            {{-- Navigasi Tab --}}
            <div class="flex h-12 w-full gap-2 overflow-x-auto overflow-y-hidden border-b border-gray-200 bg-transparent p-0 dark:border-gray-700" role="tablist">
                <button x-on:click="selectedTab = 'tentang'" 
                    x-bind:class="selectedTab === 'tentang' ? 'border-brand-500 text-brand-500 dark:border-brand-400 dark:text-brand-400' : 'border-transparent text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200'"
                    class="-mb-px inline-flex h-12 cursor-pointer items-center justify-center border-b-2 px-4 text-sm font-medium transition-colors" 
                    type="button" role="tab">
                    Tentang Kami
                </button>
                
                {{-- Contoh Tab lain (bisa kamu isi nanti) --}}
                <button x-on:click="selectedTab = 'misi'" 
                    x-bind:class="selectedTab === 'misi' ? 'border-brand-500 text-brand-500 dark:border-brand-400 dark:text-brand-400' : 'border-transparent text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200'"
                    class="-mb-px inline-flex h-12 cursor-pointer items-center justify-center border-b-2 px-4 text-sm font-medium transition-colors" 
                    type="button" role="tab">
                    Visi & Misi
                </button>

                <button x-on:click="selectedTab = 'sejarah'" 
                    x-bind:class="selectedTab === 'sejarah' ? 'border-brand-500 text-brand-500 dark:border-brand-400 dark:text-brand-400' : 'border-transparent text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200'"
                    class="-mb-px inline-flex h-12 cursor-pointer items-center justify-center border-b-2 px-4 text-sm font-medium transition-colors" 
                    type="button" role="tab">
                    Sejarah
                </button>
            </div>

            {{-- Konten Tab --}}
            <div class="pt-6">
                
                {{-- TAB: OVERVIEW --}}
                <div x-show="selectedTab === 'tentang'" x-transition.opacity class="space-y-6">
                    
                    <x-common.component-card title="Deskripsi Tentang Kami">
                        <div>
                            <label for="deskripsi" class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                Deskripsi <span class="text-error-500">*</span>
                            </label>
                            <textarea 
                                id="deskripsi" 
                                name="deskripsi" 
                                rows="6" 
                                placeholder="Masukkan deskripsi tentang kami..."
                                class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 @error('deskripsi') !border-red-500 @enderror"
                            >{{ old('deskripsi', $tentang->deskripsi ?? '') }}</textarea>
                            
                            @error('deskripsi')
                                <small class="text-error-500 mt-1 block">{{ $message }}</small>
                            @enderror
                        </div>
                    </x-common.component-card>

                    <x-common.component-card title="Foto Tentang Kami">
                        <div 
                            x-data="{
                                isDragging: false,
                                previewUrl: null,
                                fileName: '',
                                handleDrop(e) {
                                    this.isDragging = false;
                                    const file = e.dataTransfer.files[0];
                                    if (file) this.setFile(file);
                                },
                                handleFiles(selectedFile) {
                                    if (selectedFile) this.setFile(selectedFile);
                                },
                                setFile(file) {
                                    const validTypes = ['image/png', 'image/jpeg', 'image/webp', 'image/svg+xml'];
                                    if (!validTypes.includes(file.type)) {
                                        alert('Format harus PNG, JPG, WebP, atau SVG.');
                                        return;
                                    }
                                    this.fileName = file.name;
                                    this.previewUrl = URL.createObjectURL(file);
        
                                    // sinkronkan ke input file asli
                                    const dt = new DataTransfer();
                                    dt.items.add(file);
                                    $refs.fileInput.files = dt.files;
                                },
                                clearFile() {
                                    this.fileName = '';
                                    this.previewUrl = null;
                                    $refs.fileInput.value = '';
                                }
                            }"
                            class="transition border border-dashed rounded-xl cursor-pointer
                                {{ $errors->has('foto') ? 'border-error-300 dark:border-error-700' : 'border-gray-300 hover:border-brand-500 dark:border-gray-700 dark:hover:border-brand-500' }}"
                        >
                            <div 
                                @drop.prevent="handleDrop($event)"
                                @dragover.prevent="isDragging = true"
                                @dragleave.prevent="isDragging = false"
                                @click="$refs.fileInput.click()"
                                :class="isDragging ? 'bg-gray-100 dark:bg-gray-800' : 'bg-gray-50 dark:bg-gray-900'"
                                class="rounded-xl p-7 lg:p-10 transition-colors cursor-pointer"
                            >
                                <input 
                                    x-ref="fileInput"
                                    type="file" 
                                    id="foto"
                                    name="foto" 
                                    accept="image/png,image/jpeg,image/webp,image/svg+xml"
                                    @change="handleFiles($event.target.files[0])"
                                    class="hidden"
                                    @click.stop
                                />

                                <div class="flex flex-col items-center m-0">
                                    <div class="mb-[22px] flex justify-center">
                                        <div class="flex h-[68px] w-[68px] items-center justify-center rounded-full bg-gray-200 text-gray-700 dark:bg-gray-800 dark:text-gray-400">
                                            <svg class="fill-current" width="29" height="28" viewBox="0 0 29 28" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.5019 3.91699C14.2852 3.91699 14.0899 4.00891 13.953 4.15589L8.57363 9.53186C8.28065 9.82466 8.2805 10.2995 8.5733 10.5925C8.8661 10.8855 9.34097 10.8857 9.63396 10.5929L13.7519 6.47752V18.667C13.7519 19.0812 14.0877 19.417 14.5019 19.417C14.9161 19.417 15.2519 19.0812 15.2519 18.667V6.48234L19.3653 10.5929C19.6583 10.8857 20.1332 10.8855 20.426 10.5925C20.7188 10.2995 20.7186 9.82463 20.4256 9.53184L15.0838 4.19378C14.9463 4.02488 14.7367 3.91699 14.5019 3.91699ZM5.91626 18.667C5.91626 18.2528 5.58047 17.917 5.16626 17.917C4.75205 17.917 4.41626 18.2528 4.41626 18.667V21.8337C4.41626 23.0763 5.42362 24.0837 6.66626 24.0837H22.3339C23.5766 24.0837 24.5839 23.0763 24.5839 21.8337V18.667C24.5839 18.2528 24.2482 17.917 23.8339 17.917C23.4197 17.917 23.0839 18.2528 23.0839 18.667V21.8337C23.0839 22.2479 22.7482 22.5837 22.3339 22.5837H6.66626C6.25205 22.5837 5.91626 22.2479 5.91626 21.8337V18.667Z"/>
                                            </svg>
                                        </div>
                                    </div>

                                    <h4 class="mb-3 font-semibold text-gray-800 text-theme-xl dark:text-white/90">
                                        <span x-show="!isDragging">Drag & Drop Foto Here</span>
                                        <span x-show="isDragging" x-cloak>Drop Foto Here</span>
                                    </h4>

                                    <span class="text-center mb-5 block w-full max-w-[290px] text-sm text-gray-700 dark:text-gray-400">
                                        Drag and drop PNG, JPG, WebP, SVG here or browse
                                    </span>

                                    <span class="font-medium underline text-theme-sm text-brand-500">
                                        Browse File
                                    </span>
                                </div>
                            </div>

                            {{-- Preview gambar baru --}}
                            <div x-show="previewUrl" x-cloak class="p-4 border-t border-gray-200 dark:border-gray-700">
                                <div class="flex items-center justify-between gap-3 p-3 bg-gray-50 dark:bg-gray-800 rounded-lg">
                                    <div class="flex items-center gap-3">
                                        <img :src="previewUrl" class="h-12 w-12 rounded object-cover" alt="preview">
                                        <span class="text-sm text-gray-700 dark:text-gray-300" x-text="fileName"></span>
                                    </div>
                                    <button @click.stop="clearFile()" type="button" class="text-red-500 hover:text-red-700 dark:text-red-400 dark:hover:text-red-300">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        {{-- Preview gambar lama --}}
                        @if (!empty($tentang->foto))
                            <div class="mt-4">
                                <p class="mb-2 text-theme-xs text-gray-500 dark:text-gray-400">Foto saat ini:</p>
                                <img 
                                    src="{{ asset('storage/' . $tentang->foto) }}" 
                                    alt="Overview Image"
                                    class="h-40 w-auto rounded-lg object-cover border border-gray-300 dark:border-gray-700"
                                >
                            </div>
                        @endif

                        <p class="mt-3 text-theme-xs text-gray-500 dark:text-gray-400">
                            Kosongkan jika tidak ingin mengganti foto. Maks: 2MB.
                        </p>

                        @error('foto')
                            <p class="text-theme-xs text-error-500 mt-1">{{ $message }}</p>
                        @enderror
                    </x-common.component-card>
                    
                </div>

                {{-- TAB: MISI (Placeholder, tinggal diisi nanti) --}}
                <div x-show="selectedTab === 'misi'" x-transition.opacity class="space-y-6">
                    <x-common.component-card title="Misi Kami">
                        <div>
                            <label for="deskripsi" class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                Misi <span class="text-error-500">*</span>
                            </label>
                            <textarea 
                                id="deskripsi" 
                                name="deskripsi" 
                                rows="6" 
                                placeholder="Masukkan deskripsi tentang kami..."
                                class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 @error('deskripsi') !border-red-500 @enderror"
                            >{{ old('deskripsi', $tentang->deskripsi ?? '') }}</textarea>
                            
                            @error('deskripsi')
                                <small class="text-error-500 mt-1 block">{{ $message }}</small>
                            @enderror
                        </div>
                    </x-common.component-card>

                    <x-common.component-card title="Visi Kami">
                        <div>
                            <label for="deskripsi" class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                Visi <span class="text-error-500">*</span>
                            </label>
                            <textarea 
                                id="deskripsi" 
                                name="deskripsi" 
                                rows="6" 
                                placeholder="Masukkan deskripsi tentang kami..."
                                class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 @error('deskripsi') !border-red-500 @enderror"
                            >{{ old('deskripsi', $tentang->deskripsi ?? '') }}</textarea>
                            
                            @error('deskripsi')
                                <small class="text-error-500 mt-1 block">{{ $message }}</small>
                            @enderror
                        </div>
                    </x-common.component-card>
                </div>

                <div x-show="selectedTab === 'sejarah'" x-transition.opacity style="display: none;" class="text-sm text-gray-500 dark:text-gray-400">
                    <x-common.component-card title="Sejarah Kami">
                        <div>
                            <label for="deskripsi" class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                Sejarah <span class="text-error-500">*</span>
                            </label>
                            <textarea 
                                id="deskripsi" 
                                name="deskripsi" 
                                rows="6" 
                                placeholder="Masukkan deskripsi tentang kami..."
                                class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 @error('deskripsi') !border-red-500 @enderror"
                            >{{ old('deskripsi', $tentang->deskripsi ?? '') }}</textarea>
                            
                            @error('deskripsi')
                                <small class="text-error-500 mt-1 block">{{ $message }}</small>
                            @enderror
                        </div>
                    </x-common.component-card>

                    <x-common.component-card title="Foto Sejarah">
                        <div 
                            x-data="{
                                isDragging: false,
                                previewUrl: null,
                                fileName: '',
                                handleDrop(e) {
                                    this.isDragging = false;
                                    const file = e.dataTransfer.files[0];
                                    if (file) this.setFile(file);
                                },
                                handleFiles(selectedFile) {
                                    if (selectedFile) this.setFile(selectedFile);
                                },
                                setFile(file) {
                                    const validTypes = ['image/png', 'image/jpeg', 'image/webp', 'image/svg+xml'];
                                    if (!validTypes.includes(file.type)) {
                                        alert('Format harus PNG, JPG, WebP, atau SVG.');
                                        return;
                                    }
                                    this.fileName = file.name;
                                    this.previewUrl = URL.createObjectURL(file);
        
                                    // sinkronkan ke input file asli
                                    const dt = new DataTransfer();
                                    dt.items.add(file);
                                    $refs.fileInput.files = dt.files;
                                },
                                clearFile() {
                                    this.fileName = '';
                                    this.previewUrl = null;
                                    $refs.fileInput.value = '';
                                }
                            }"
                            class="transition border border-dashed rounded-xl cursor-pointer
                                {{ $errors->has('foto') ? 'border-error-300 dark:border-error-700' : 'border-gray-300 hover:border-brand-500 dark:border-gray-700 dark:hover:border-brand-500' }}"
                        >
                            <div 
                                @drop.prevent="handleDrop($event)"
                                @dragover.prevent="isDragging = true"
                                @dragleave.prevent="isDragging = false"
                                @click="$refs.fileInput.click()"
                                :class="isDragging ? 'bg-gray-100 dark:bg-gray-800' : 'bg-gray-50 dark:bg-gray-900'"
                                class="rounded-xl p-7 lg:p-10 transition-colors cursor-pointer"
                            >
                                <input 
                                    x-ref="fileInput"
                                    type="file" 
                                    id="foto"
                                    name="foto" 
                                    accept="image/png,image/jpeg,image/webp,image/svg+xml"
                                    @change="handleFiles($event.target.files[0])"
                                    class="hidden"
                                    @click.stop
                                />

                                <div class="flex flex-col items-center m-0">
                                    <div class="mb-[22px] flex justify-center">
                                        <div class="flex h-[68px] w-[68px] items-center justify-center rounded-full bg-gray-200 text-gray-700 dark:bg-gray-800 dark:text-gray-400">
                                            <svg class="fill-current" width="29" height="28" viewBox="0 0 29 28" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.5019 3.91699C14.2852 3.91699 14.0899 4.00891 13.953 4.15589L8.57363 9.53186C8.28065 9.82466 8.2805 10.2995 8.5733 10.5925C8.8661 10.8855 9.34097 10.8857 9.63396 10.5929L13.7519 6.47752V18.667C13.7519 19.0812 14.0877 19.417 14.5019 19.417C14.9161 19.417 15.2519 19.0812 15.2519 18.667V6.48234L19.3653 10.5929C19.6583 10.8857 20.1332 10.8855 20.426 10.5925C20.7188 10.2995 20.7186 9.82463 20.4256 9.53184L15.0838 4.19378C14.9463 4.02488 14.7367 3.91699 14.5019 3.91699ZM5.91626 18.667C5.91626 18.2528 5.58047 17.917 5.16626 17.917C4.75205 17.917 4.41626 18.2528 4.41626 18.667V21.8337C4.41626 23.0763 5.42362 24.0837 6.66626 24.0837H22.3339C23.5766 24.0837 24.5839 23.0763 24.5839 21.8337V18.667C24.5839 18.2528 24.2482 17.917 23.8339 17.917C23.4197 17.917 23.0839 18.2528 23.0839 18.667V21.8337C23.0839 22.2479 22.7482 22.5837 22.3339 22.5837H6.66626C6.25205 22.5837 5.91626 22.2479 5.91626 21.8337V18.667Z"/>
                                            </svg>
                                        </div>
                                    </div>

                                    <h4 class="mb-3 font-semibold text-gray-800 text-theme-xl dark:text-white/90">
                                        <span x-show="!isDragging">Drag & Drop Foto Here</span>
                                        <span x-show="isDragging" x-cloak>Drop Foto Here</span>
                                    </h4>

                                    <span class="text-center mb-5 block w-full max-w-[290px] text-sm text-gray-700 dark:text-gray-400">
                                        Drag and drop PNG, JPG, WebP, SVG here or browse
                                    </span>

                                    <span class="font-medium underline text-theme-sm text-brand-500">
                                        Browse File
                                    </span>
                                </div>
                            </div>

                            {{-- Preview gambar baru --}}
                            <div x-show="previewUrl" x-cloak class="p-4 border-t border-gray-200 dark:border-gray-700">
                                <div class="flex items-center justify-between gap-3 p-3 bg-gray-50 dark:bg-gray-800 rounded-lg">
                                    <div class="flex items-center gap-3">
                                        <img :src="previewUrl" class="h-12 w-12 rounded object-cover" alt="preview">
                                        <span class="text-sm text-gray-700 dark:text-gray-300" x-text="fileName"></span>
                                    </div>
                                    <button @click.stop="clearFile()" type="button" class="text-red-500 hover:text-red-700 dark:text-red-400 dark:hover:text-red-300">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        {{-- Preview gambar lama --}}
                        @if (!empty($tentang->foto))
                            <div class="mt-4">
                                <p class="mb-2 text-theme-xs text-gray-500 dark:text-gray-400">Foto saat ini:</p>
                                <img 
                                    src="{{ asset('storage/' . $tentang->foto) }}" 
                                    alt="Overview Image"
                                    class="h-40 w-auto rounded-lg object-cover border border-gray-300 dark:border-gray-700"
                                >
                            </div>
                        @endif

                        <p class="mt-3 text-theme-xs text-gray-500 dark:text-gray-400">
                            Kosongkan jika tidak ingin mengganti foto. Maks: 2MB.
                        </p>

                        @error('foto')
                            <p class="text-theme-xs text-error-500 mt-1">{{ $message }}</p>
                        @enderror
                    </x-common.component-card>
                </div>

            </div>
        </div>

        {{-- Tombol Simpan (Diletakkan di luar kotak Tab agar selalu terlihat) --}}
        <div class="mt-6 flex justify-end">
            <button 
                type="submit" 
                class="bg-brand-500 shadow-theme-xs hover:bg-brand-600 inline-flex items-center justify-center rounded-lg px-6 py-3 text-sm font-medium text-white transition"
            >
                Simpan Perubahan
            </button>
        </div>

    </form>
@endsection