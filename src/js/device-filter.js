import { devices } from './devices.js';

// Данная запись позволяет осуществлять фильтрацию по радиокнопкам и чекбоксам. Честно до конца не понимаю как она работает
const classToHideElement = 'hide';
document.addEventListener('DOMContentLoaded', function (event) {
    const form = document.querySelector('.filter__parameter');
    const updateDeviceVisibility = (event2) => {
        const deviceFilter = {};
        // Указывается name радиокнопок
        ['inputCount', 'navAntenna', 'gsmAntenna', 'gsmModem', 'simCardSlots', 'typeEq'].forEach(
            parameter => {
                if (!form[parameter]) {
                    console.error(parameter);
                }
                if (form[parameter].value !== 'all') {
                    deviceFilter[parameter] = form[parameter].value;
                }
            }
        );
        // Указывается name чекбокскнопок
        ['hasBLE', 'hasOneWire', 'hasCan', 'hasRS485', 'hasRS232', 'hasAccelerometer',
            'hasMagnit', 'hasOdometr', 'hasGlonass', 'hasServers', 'hasConnection', 'hasWifi',
            'hasAlarm', 'hasDriver', 'hasConnectCamera', 'hasTahograf', 'hasDriving',
            'hasSensorAnalog', 'hasSensorDigital', 'hasSms', 'hasTcp', 'hasGprs',
            'hasMobilEye', 'hasModbus'].forEach(
                parameter => {
                    if (!form[parameter]) {
                        console.error(parameter);
                    }
                    if (form[parameter].checked) {
                        deviceFilter[parameter] = true;
                    }
                }
            );
        const allDeviceNames = devices.map(device => device.name);
        const deviceVisibility = allDeviceNames.reduce(
            (accumulator, current) => {
                accumulator[current] = true;
                return accumulator;
            },
            {}
        );
        Object.keys(deviceFilter).forEach(
            parameter => {
                const parameterValue = deviceFilter[parameter];
                devices.forEach(
                    device => {
                        if (device[parameter] !== parameterValue) {
                            deviceVisibility[device.name] = false;
                        }
                    }
                )
            }
        );
        const container = document.querySelector('#trackers');
        allDeviceNames.forEach(
            deviceName => {
                const deviceElement = container.querySelector('.' + deviceName);
                if (deviceVisibility[deviceName] && deviceElement.classList.contains(classToHideElement)) {
                    deviceElement.classList.remove(classToHideElement);
                }
                if (!deviceVisibility[deviceName] && !deviceElement.classList.contains(classToHideElement)) {
                    deviceElement.classList.add(classToHideElement);
                }
            }
        );
        event.stopPropagation();
        return false;

    }
    form.removeEventListener('click', updateDeviceVisibility);
    form.addEventListener('click', updateDeviceVisibility);
});

// Данные записи создают филтр для поп апа на мобильной версии
const classToHideElementPop = 'hide';
document.addEventListener('DOMContentLoaded', function (event) {
    const formPop = document.querySelector('.filter-pop__parameter');
    const updateDeviceVisibilityPopPop = (event2) => {
        const deviceFilterPop = {};
        ['inputCount', 'navAntenna', 'gsmAntenna', 'gsmModem', 'simCardSlots'].forEach(
            parameter => {
                if (!formPop[parameter]) {
                    console.error(parameter);
                }
                if (formPop[parameter].value !== 'all') {
                    deviceFilterPop[parameter] = formPop[parameter].value;
                }
            }
        );
        ['hasBLE', 'hasOneWire', 'hasCan', 'hasRS485', 'hasRS232', 'hasAccelerometer',
            'hasMagnit', 'hasOdometr', 'hasGlonass', 'hasServers', 'hasConnection', 'hasWifi',
            'hasAlarm', 'hasDriver', 'hasConnectCamera', 'hasTahograf', 'hasDriving',
            'hasSensorAnalog', 'hasSensorDigital', 'hasSms', 'hasTcp', 'hasGprs',
            'hasMobilEye', 'hasModbus'].forEach(
                parameter => {
                    if (!formPop[parameter]) {
                        console.error(parameter);
                    }
                    if (formPop[parameter].checked) {
                        deviceFilterPop[parameter] = true;
                    }
                }
            );
        const allDeviceNamesPop = devices.map(device => device.name);
        const deviceVisibilityPop = allDeviceNamesPop.reduce(
            (accumulator, current) => {
                accumulator[current] = true;
                return accumulator;
            },
            {}
        );
        Object.keys(deviceFilterPop).forEach(
            parameter => {
                const parameterValuePop = deviceFilterPop[parameter];
                devices.forEach(
                    device => {
                        if (device[parameter] !== parameterValuePop) {
                            deviceVisibilityPop[device.name] = false;
                        }
                    }
                )
            }
        );
        const containerPop = document.querySelector('#trackers');
        allDeviceNamesPop.forEach(
            deviceName => {
                const deviceElementPop = containerPop.querySelector('.' + deviceName);
                if (deviceVisibilityPop[deviceName] && deviceElementPop.classList.contains(classToHideElementPop)) {
                    deviceElementPop.classList.remove(classToHideElementPop);
                }
                if (!deviceVisibilityPop[deviceName] && !deviceElementPop.classList.contains(classToHideElementPop)) {
                    deviceElementPop.classList.add(classToHideElementPop);
                }
            }
        );
        event.stopPropagation();
        return false;

    }
    formPop.removeEventListener('click', updateDeviceVisibilityPopPop);
    formPop.addEventListener('click', updateDeviceVisibilityPopPop);
});




