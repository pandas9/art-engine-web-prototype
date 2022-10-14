import { DEFAULT_LAYER_CONFIGURATIONS } from './helper.js';

document.addEventListener('alpine:init', () => {
    Alpine.store('project', {
        debug: true,
        
        step: 1,
        name: '',
        description: '',
        width: '',
        height: '',
        generateBackground: false,
        backgroundBrightness: '',
        backgroundSmoothing: true,
        tokenID: '0',
        outputJPG: false,
        baseIPFS: '',
        hashImages: true,
        dnaTorrance: '10000',
        emptyLayerName: 'NONE',
        shuffleLayerConfigurations: false,
        rarityDelimiter: '-rarity-',
        layerConfigurations: [...DEFAULT_LAYER_CONFIGURATIONS],
        buildImages: [
            '0.png',
            '1.png',
            '2.png',
            '3.png',
            '4.png',
            '5.png',
            '6.png',
            '7.png',
            '8.png',
            '9.png',
        ],
        
        alert: false,
        alertMessage: '',

        imageModal: false,
        imageModalSrc: '',

        downloadBuild() {
            document.getElementById('frame-download-file').src = `images/build.zip`;
        },

        toggleImageModal(img='') {
            if (this.imageModal) {
                this.imageModal = false;
                this.imageModalSrc = '';
            } else {
                this.imageModal = true;
                this.imageModalSrc = img;
            }
        },

        toggleExpandLayer(configInd, layerInd) {
            if (this.layerConfigurations[configInd].layers[layerInd].expand) {
                this.layerConfigurations[configInd].layers[layerInd].expand = false;
            } else {
                this.layerConfigurations[configInd].layers[layerInd].expand = true;
            }
        },

        toggleExpandLayerFolder(configInd, layerInd, folderInd) {
            if (this.layerConfigurations[configInd].layers[layerInd].folders[folderInd].expand) {
                this.layerConfigurations[configInd].layers[layerInd].folders[folderInd].expand = false;
            } else {
                this.layerConfigurations[configInd].layers[layerInd].folders[folderInd].expand = true;
            }
        },

        addImage(configInd, layerInd, folderInd=-1) {
            if (folderInd === -1) {
                this.layerConfigurations[configInd].layers[layerInd].expand = true;
                this.layerConfigurations[configInd].layers[layerInd].images.push({
                    name: '',
                });
            } else {
                this.layerConfigurations[configInd].layers[layerInd].folders[folderInd].expand = true;
                this.layerConfigurations[configInd].layers[layerInd].folders[folderInd].images.push({
                    name: '',
                });
            }
            
        },

        deleteImage(configInd, layerInd, imageInd, folderInd=-1) {
            if (folderInd === -1) {
                this.layerConfigurations[configInd].layers[layerInd].images.splice(imageInd, 1);
            } else {
                this.layerConfigurations[configInd].layers[layerInd].folders[folderInd].images.splice(imageInd, 1);
            }
        },

        addFolder(configInd, layerInd) {
            this.layerConfigurations[configInd].layers[layerInd].expand = true;
            this.layerConfigurations[configInd].layers[layerInd].folders.push({
                'name': '',
                'images': [],
                'folders': [],
                'expand': false,
            });
        },

        deleteFolder(configInd, layerInd, folderInd) {
            this.layerConfigurations[configInd].layers[layerInd].folders.splice(folderInd, 1);
        },

        deleteLayerConfiguration(ind) {
            this.layerConfigurations.splice(ind, 1);
        },

        addLayerConfiguration() {
            this.layerConfigurations.push({
                name: 'New Test',
                grow: 5,
                layers: [],
            });
        },

        addLayer(configInd) {
            this.layerConfigurations[configInd].layers.push({
                'name': '',
                'images': [],
                'folders': [],
                'expand': false,
            });
        },

        deleteLayer(configInd, layerInd) {
            this.layerConfigurations[configInd].layers.splice(layerInd, 1);
        },

        goToStep1() {
            if (this.debug) console.log(this);
            
            window.scrollTo(0, 0);
            this.step = 1;
        },

        goToStep2() {
            if (this.debug) console.log(this);

            if (this.name === '') {
                this.showAlert('Project name is required');
            } else if (this.description === '') {
                this.showAlert('Project description is required');
            } else if (this.width === '') {
                this.showAlert('Project width is required');
            } else if (this.height === '') {
                this.showAlert('Project height is required');
            } else if (this.generateBackground && this.backgroundBrightness === '') {
                this.showAlert('Project background brightness is required');
            } else if (this.baseIPFS === '') {
                this.showAlert('Project base IPFS is required');
            } else {
                window.scrollTo(0, 0);
                this.step = 2;
            }
        },

        goToStep3() {
            if (this.debug) console.log(this);

            if (this.layerConfigurations.length === 0) {
                this.showAlert('Project layer configurations are required');
            } else {
                window.scrollTo(0, 0);
                this.step = 3;
            }
        },
        
        showAlert(msg) {
            this.alertMessage = msg;
            this.alert = true;
        },

        hideAlert() {
            this.alert = false;
            this.alertMessage = '';
        },
    })
})
