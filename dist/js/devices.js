// Перечень продуктов. Имена являются классами которые мы добавляем в html что бы их отфильтровывать.

export const devices = [
    // Аравни Л2
    {
        name: 'arnavi-l2',
        inputCount: '2',
        navAntenna: 'internal',
        gsmAntenna: 'internal',
        gsmModem: '2G',
        simCardSlots: 'oneSimCardOrSimChip',
        hasBLE: true,
        hasOneWire: false,
        hasCan: false,
        hasRS485: false,
        hasRS232: false,
        hasAccelerometer: true,
        hasMagnit: false,
        hasOdometr: true,
        hasGlonass: true,
        hasServers: true,
        hasConnection: false,
        hasWifi: false,
        hasAlarm: true,
        hasDriver: false,
        hasChat: false,
        hasConnectCamera: false,
        hasTahograf: false,
        hasDriving: true,
        hasSensorAnalog: false,
        hasLbs: false,
        hasSensorDigital: false,
        hasSms: true,
        hasTcp: true,
        hasGprs: true,
        hasMobilEye: false,
        hasModbus: false,
    },
    // Аравни А1
    {
        name: 'arnavi-a1',
        inputCount: '2',
        navAntenna: 'internal',
        gsmAntenna: 'internal',
        gsmModem: '2G',
        simCardSlots: 'oneSimCardOrSimChip',
        hasBLE: true,
        hasOneWire: false,
        hasCan: false,
        hasRS485: false,
        hasRS232: false,
        hasAccelerometer: true,
        hasMagnit: false,
        hasOdometr: true,
        hasGlonass: true,
        hasServers: true,
        hasConnection: false,
        hasWifi: false,
        hasAlarm: true,
        hasDriver: false,
        hasChat: false,
        hasConnectCamera: false,
        hasTahograf: false,
        hasDriving: true,
        hasSensorAnalog: false,
        hasLbs: false,
        hasSensorDigital: false,
        hasSms: true,
        hasTcp: true,
        hasGprs: true,
        hasMobilEye: false,
        hasModbus: false,
    },
    // Аравни А2
    {
        name: 'arnavi-a2',
        inputCount: '4',
        navAntenna: 'internal',
        gsmAntenna: 'internal',
        gsmModem: '2G',
        simCardSlots: 'oneSimCardOrSimChip',
        hasBLE: true,
        hasOneWire: false,
        hasCan: true,
        hasRS485: false,
        hasRS232: false,
        hasAccelerometer: true,
        hasMagnit: false,
        hasOdometr: true,
        hasGlonass: true,
        hasServers: true,
        hasConnection: false,
        hasWifi: false,
        hasAlarm: true,
        hasDriver: false,
        hasChat: false,
        hasConnectCamera: false,
        hasTahograf: false,
        hasDriving: true,
        hasSensorAnalog: false,
        hasLbs: false,
        hasSensorDigital: true,
        hasSms: true,
        hasTcp: true,
        hasGprs: true,
        hasMobilEye: false,
        hasModbus: false,
    },
    // Аравни А3
    {
        name: 'arnavi-a3',
        inputCount: '4',
        navAntenna: 'external',
        gsmAntenna: 'internal',
        gsmModem: '2G',
        simCardSlots: 'oneSimCardOrSimChip',
        hasBLE: true,
        hasOneWire: false,
        hasCan: false,
        hasRS485: true,
        hasRS232: true,
        hasAccelerometer: true,
        hasMagnit: false,
        hasOdometr: true,
        hasGlonass: true,
        hasServers: true,
        hasConnection: false,
        hasWifi: false,
        hasAlarm: true,
        hasDriver: false,
        hasChat: false,
        hasConnectCamera: false,
        hasTahograf: false,
        hasDriving: true,
        hasSensorAnalog: false,
        hasLbs: false,
        hasSensorDigital: true,
        hasSms: true,
        hasTcp: true,
        hasGprs: true,
        hasMobilEye: false,
        hasModbus: false,
    },
    // Аравни А4-MAX
    {
        name: 'arnavi-a4',
        inputCount: '4',
        navAntenna: 'external',
        gsmAntenna: 'internal',
        gsmModem: '2G',
        simCardSlots: 'oneSimCardOrSimChip',
        hasBLE: true,
        hasOneWire: false,
        hasCan: false,
        hasRS485: true,
        hasRS232: true,
        hasAccelerometer: true,
        hasMagnit: false,
        hasOdometr: true,
        hasGlonass: true,
        hasServers: true,
        hasConnection: false,
        hasWifi: false,
        hasAlarm: true,
        hasDriver: false,
        hasChat: false,
        hasConnectCamera: false,
        hasTahograf: false,
        hasDriving: true,
        hasSensorAnalog: false,
        hasLbs: false,
        hasSensorDigital: true,
        hasSms: true,
        hasTcp: true,
        hasGprs: true,
        hasMobilEye: false,
        hasModbus: false,
    },
    // Интеграл 4
    {
        name: 'integral-4',
        inputCount: '7',
        navAntenna: 'internal',
        gsmAntenna: 'internal',
        gsmModem: '2G',
        simCardSlots: 'twoSimCardOrSimChips',
        hasBLE: true,
        hasOneWire: true,
        hasCan: true,
        hasRS485: true,
        hasRS232: true,
        hasAccelerometer: true,
        hasMagnit: false,
        hasOdometr: true,
        hasGlonass: true,
        hasServers: true,
        hasConnection: false,
        hasWifi: false,
        hasAlarm: true,
        hasDriver: true,
        hasChat: false,
        hasConnectCamera: true,
        hasTahograf: true,
        hasDriving: true,
        hasSensorAnalog: true,
        hasLbs: false,
        hasSensorDigital: true,
        hasSms: true,
        hasTcp: true,
        hasGprs: true,
        hasMobilEye: false,
        hasModbus: true,
    },
    // Интеграл 4G
    {
        name: 'integral-4g',
        inputCount: '4',
        navAntenna: 'internal',
        gsmAntenna: 'internal',
        gsmModem: '2G4G',
        simCardSlots: 'oneSimCardOrSimChip',
        hasBLE: false,
        hasOneWire: true,
        hasCan: true,
        hasRS485: true,
        hasRS232: true,
        hasAccelerometer: true,
        hasMagnit: false,
        hasOdometr: true,
        hasGlonass: true,
        hasServers: true,
        hasConnection: false,
        hasWifi: false,
        hasAlarm: true,
        hasDriver: true,
        hasChat: false,
        hasConnectCamera: true,
        hasTahograf: true,
        hasDriving: true,
        hasSensorAnalog: true,
        hasLbs: false,
        hasSensorDigital: true,
        hasSms: true,
        hasTcp: true,
        hasGprs: true,
        hasMobilEye: false,
        hasModbus: false,
    },
    // Интеграл 4W
    {
        name: 'integral-4w',
        inputCount: '10',
        navAntenna: 'internal',
        gsmAntenna: 'internal',
        gsmModem: '2G',
        simCardSlots: 'twoSimCardOrSimChips',
        hasBLE: true,
        hasOneWire: true,
        hasCan: true,
        hasRS485: true,
        hasRS232: true,
        hasAccelerometer: true,
        hasMagnit: false,
        hasOdometr: true,
        hasGlonass: true,
        hasServers: true,
        hasConnection: false,
        hasWifi: true,
        hasAlarm: true,
        hasDriver: true,
        hasChat: false,
        hasConnectCamera: true,
        hasTahograf: true,
        hasDriving: true,
        hasSensorAnalog: true,
        hasLbs: false,
        hasSensorDigital: true,
        hasSms: true,
        hasTcp: true,
        hasGprs: true,
        hasMobilEye: false,
        hasModbus: false,
    },
    // Аравни 5
    {
        name: 'arnavi-5',
        inputCount: '10',
        navAntenna: 'external',
        gsmAntenna: 'external',
        gsmModem: '2G',
        simCardSlots: 'twoSimCardOrSimChips',
        hasBLE: true,
        hasOneWire: true,
        hasCan: true,
        hasRS485: true,
        hasRS232: true,
        hasAccelerometer: true,
        hasMagnit: false,
        hasOdometr: true,
        hasGlonass: true,
        hasServers: true,
        hasConnection: true,
        hasWifi: true,
        hasAlarm: true,
        hasDriver: true,
        hasChat: false,
        hasConnectCamera: true,
        hasTahograf: true,
        hasDriving: false,
        hasSensorAnalog: true,
        hasLbs: false,
        hasSensorDigital: true,
        hasSms: true,
        hasTcp: true,
        hasGprs: true,
        hasMobilEye: true,
        hasModbus: true,
    },
    // Аравни 6
    {
        name: 'arnavi-6',
        inputCount: '10',
        navAntenna: 'internal',
        gsmAntenna: 'internal',
        gsmModem: '2G4G',
        simCardSlots: 'twoSimCardOrSimChips',
        hasBLE: true,
        hasOneWire: true,
        hasCan: true,
        hasRS485: true,
        hasRS232: true,
        hasAccelerometer: true,
        hasMagnit: false,
        hasOdometr: true,
        hasGlonass: true,
        hasServers: true,
        hasConnection: true,
        hasWifi: true,
        hasAlarm: true,
        hasDriver: true,
        hasChat: false,
        hasConnectCamera: true,
        hasTahograf: true,
        hasDriving: true,
        hasSensorAnalog: true,
        hasLbs: false,
        hasSensorDigital: true,
        hasSms: true,
        hasTcp: true,
        hasGprs: true,
        hasMobilEye: false,
        hasModbus: true,
    },
    {
        name: 'arnavi-becon',
        inputCount: 'none',
        navAntenna: 'none',
        gsmAntenna: 'none',
        gsmModem: 'none',
        simCardSlots: 'none',
        hasBLE: false,
        hasOneWire: false,
        hasCan: false,
        hasRS485: false,
        hasRS232: false,
        hasAccelerometer: false,
        hasMagnit: true,
        hasOdometr: false,
        hasGlonass: false,
        hasServers: false,
        hasConnection: false,
        hasWifi: false,
        hasAlarm: false,
        hasDriver: false,
        hasChat: false,
        hasConnectCamera: false,
        hasTahograf: false,
        hasDriving: false,
        hasSensorAnalog: false,
        hasLbs: false,
        hasSensorDigital: false,
        hasSms: false,
        hasTcp: false,
        hasGprs: false,
        hasMobilEye: false,
        hasModbus: false,
    },
    // Аравни Бикон
    {
        name: 'arnavi-becon-qi',
        inputCount: 'none',
        navAntenna: 'none',
        gsmAntenna: 'none',
        gsmModem: 'none',
        simCardSlots: 'none',
        hasBLE: false,
        hasOneWire: false,
        hasCan: false,
        hasRS485: false,
        hasRS232: false,
        hasAccelerometer: false,
        hasMagnit: true,
        hasOdometr: false,
        hasGlonass: false,
        hasServers: false,
        hasConnection: false,
        hasWifi: false,
        hasAlarm: false,
        hasDriver: false,
        hasChat: false,
        hasConnectCamera: false,
        hasTahograf: false,
        hasDriving: false,
        hasSensorAnalog: false,
        hasLbs: false,
        hasSensorDigital: false,
        hasSms: false,
        hasTcp: false,
        hasGprs: false,
        hasMobilEye: false,
        hasModbus: false,
    },
    {
        name: 'arnavi-wifi',
        inputCount: 'none',
        navAntenna: 'none',
        gsmAntenna: 'none',
        gsmModem: 'none',
        simCardSlots: 'none',
        hasBLE: false,
        hasOneWire: false,
        hasCan: false,
        hasRS485: false,
        hasRS232: false,
        hasAccelerometer: false,
        hasMagnit: false,
        hasOdometr: false,
        hasGlonass: false,
        hasServers: false,
        hasConnection: false,
        hasWifi: false,
        hasAlarm: false,
        hasDriver: false,
        hasChat: false,
        hasConnectCamera: false,
        hasTahograf: false,
        hasDriving: false,
        hasSensorAnalog: false,
        hasLbs: false,
        hasSensorDigital: false,
        hasSms: false,
        hasTcp: false,
        hasGprs: false,
        hasMobilEye: false,
        hasModbus: false,
        typeEq: 'wiFi',
    },
    // Аравни Бикон КьюАй
    {
        name: 'arnavi-can',
        inputCount: 'none',
        navAntenna: 'none',
        gsmAntenna: 'none',
        gsmModem: 'none',
        simCardSlots: 'none',
        hasBLE: false,
        hasOneWire: false,
        hasCan: false,
        hasRS485: false,
        hasRS232: false,
        hasAccelerometer: false,
        hasMagnit: false,
        hasOdometr: false,
        hasGlonass: false,
        hasServers: false,
        hasConnection: false,
        hasWifi: false,
        hasAlarm: false,
        hasDriver: false,
        hasChat: false,
        hasConnectCamera: false,
        hasTahograf: false,
        hasDriving: false,
        hasSensorAnalog: false,
        hasLbs: false,
        hasSensorDigital: false,
        hasSms: false,
        hasTcp: false,
        hasGprs: false,
        hasMobilEye: false,
        hasModbus: false,
        typeEq: 'can',
    },
    // Аравни КАН
    {
        name: 'relay',
        inputCount: 'none',
        navAntenna: 'none',
        gsmAntenna: 'none',
        gsmModem: 'none',
        simCardSlots: 'none',
        hasBLE: false,
        hasOneWire: false,
        hasCan: false,
        hasRS485: false,
        hasRS232: false,
        hasAccelerometer: false,
        hasMagnit: false,
        hasOdometr: false,
        hasGlonass: false,
        hasServers: false,
        hasConnection: false,
        hasWifi: false,
        hasAlarm: false,
        hasDriver: false,
        hasChat: false,
        hasConnectCamera: false,
        hasTahograf: false,
        hasDriving: false,
        hasSensorAnalog: false,
        hasLbs: false,
        hasSensorDigital: false,
        hasSms: false,
        hasTcp: false,
        hasGprs: false,
        hasMobilEye: false,
        hasModbus: false,
        typeEq: 'relay',
    },
    // Аравни Релей
    {
        name: 'relay2',
        inputCount: 'none',
        navAntenna: 'none',
        gsmAntenna: 'none',
        gsmModem: 'none',
        simCardSlots: 'none',
        hasBLE: false,
        hasOneWire: false,
        hasCan: false,
        hasRS485: false,
        hasRS232: false,
        hasAccelerometer: false,
        hasMagnit: false,
        hasOdometr: false,
        hasGlonass: false,
        hasServers: false,
        hasConnection: false,
        hasWifi: false,
        hasAlarm: false,
        hasDriver: false,
        hasChat: false,
        hasConnectCamera: false,
        hasTahograf: false,
        hasDriving: false,
        hasSensorAnalog: false,
        hasLbs: false,
        hasSensorDigital: false,
        hasSms: false,
        hasTcp: false,
        hasGprs: false,
        hasMobilEye: false,
        hasModbus: false,
        typeEq: 'relay',
    },
    // Аравни Протект
    {
        name: 'relay3',
        inputCount: 'none',
        navAntenna: 'none',
        gsmAntenna: 'none',
        gsmModem: 'none',
        simCardSlots: 'none',
        hasBLE: false,
        hasOneWire: false,
        hasCan: false,
        hasRS485: false,
        hasRS232: false,
        hasAccelerometer: false,
        hasMagnit: false,
        hasOdometr: false,
        hasGlonass: false,
        hasServers: false,
        hasConnection: false,
        hasWifi: false,
        hasAlarm: false,
        hasDriver: false,
        hasChat: false,
        hasConnectCamera: false,
        hasTahograf: false,
        hasDriving: false,
        hasSensorAnalog: false,
        hasLbs: false,
        hasSensorDigital: false,
        hasSms: false,
        hasTcp: false,
        hasGprs: false,
        hasMobilEye: false,
        hasModbus: false,
        typeEq: 'relay',
    },
    // Реле блокировки
    {
        name: 'relay4',
        inputCount: 'none',
        navAntenna: 'none',
        gsmAntenna: 'none',
        gsmModem: 'none',
        simCardSlots: 'none',
        hasBLE: false,
        hasOneWire: false,
        hasCan: false,
        hasRS485: false,
        hasRS232: false,
        hasAccelerometer: false,
        hasMagnit: false,
        hasOdometr: false,
        hasGlonass: false,
        hasServers: false,
        hasConnection: false,
        hasWifi: false,
        hasAlarm: false,
        hasDriver: false,
        hasChat: false,
        hasConnectCamera: false,
        hasTahograf: false,
        hasDriving: false,
        hasSensorAnalog: false,
        hasLbs: false,
        hasSensorDigital: false,
        hasSms: false,
        hasTcp: false,
        hasGprs: false,
        hasMobilEye: false,
        hasModbus: false,
        typeEq: 'relay',
    },
    // Камера
    {
        name: 'arnavi-camera',
        inputCount: 'none',
        navAntenna: 'none',
        gsmAntenna: 'none',
        gsmModem: 'none',
        simCardSlots: 'none',
        hasBLE: false,
        hasOneWire: false,
        hasCan: false,
        hasRS485: false,
        hasRS232: false,
        hasAccelerometer: false,
        hasMagnit: false,
        hasOdometr: false,
        hasGlonass: false,
        hasServers: false,
        hasConnection: false,
        hasWifi: false,
        hasAlarm: false,
        hasDriver: false,
        hasChat: false,
        hasConnectCamera: false,
        hasTahograf: false,
        hasDriving: false,
        hasSensorAnalog: false,
        hasLbs: false,
        hasSensorDigital: false,
        hasSms: false,
        hasTcp: false,
        hasGprs: false,
        hasMobilEye: false,
        hasModbus: false,
        typeEq: 'camera',
    },
    // Микрофон
    {
        name: 'arnavi-microphone',
        inputCount: 'none',
        navAntenna: 'none',
        gsmAntenna: 'none',
        gsmModem: 'none',
        simCardSlots: 'none',
        hasBLE: false,
        hasOneWire: false,
        hasCan: false,
        hasRS485: false,
        hasRS232: false,
        hasAccelerometer: false,
        hasMagnit: false,
        hasOdometr: false,
        hasGlonass: false,
        hasServers: false,
        hasConnection: false,
        hasWifi: false,
        hasAlarm: false,
        hasDriver: false,
        hasChat: false,
        hasConnectCamera: false,
        hasTahograf: false,
        hasDriving: false,
        hasSensorAnalog: false,
        hasLbs: false,
        hasSensorDigital: false,
        hasSms: false,
        hasTcp: false,
        hasGprs: false,
        hasMobilEye: false,
        hasModbus: false,
        typeEq: 'microphone',
    },
    // Тревожная кнопка
    {
        name: 'arnavi-button',
        inputCount: 'none',
        navAntenna: 'none',
        gsmAntenna: 'none',
        gsmModem: 'none',
        simCardSlots: 'none',
        hasBLE: false,
        hasOneWire: false,
        hasCan: false,
        hasRS485: false,
        hasRS232: false,
        hasAccelerometer: false,
        hasMagnit: false,
        hasOdometr: false,
        hasGlonass: false,
        hasServers: false,
        hasConnection: false,
        hasWifi: false,
        hasAlarm: false,
        hasDriver: false,
        hasChat: false,
        hasConnectCamera: false,
        hasTahograf: false,
        hasDriving: false,
        hasSensorAnalog: false,
        hasLbs: false,
        hasSensorDigital: false,
        hasSms: false,
        hasTcp: false,
        hasGprs: false,
        hasMobilEye: false,
        hasModbus: false,
        typeEq: 'button',
    },
    // Набор антенн
    {
        name: 'arnavi-anten',
        inputCount: 'none',
        navAntenna: 'none',
        gsmAntenna: 'none',
        gsmModem: 'none',
        simCardSlots: 'none',
        hasBLE: false,
        hasOneWire: false,
        hasCan: false,
        hasRS485: false,
        hasRS232: false,
        hasAccelerometer: false,
        hasMagnit: false,
        hasOdometr: false,
        hasGlonass: false,
        hasServers: false,
        hasConnection: false,
        hasWifi: false,
        hasAlarm: false,
        hasDriver: false,
        hasChat: false,
        hasConnectCamera: false,
        hasTahograf: false,
        hasDriving: false,
        hasSensorAnalog: false,
        hasLbs: false,
        hasSensorDigital: false,
        hasSms: false,
        hasTcp: false,
        hasGprs: false,
        hasMobilEye: false,
        hasModbus: false,
        typeEq: 'anten',
    },
    {
        name: 'arnavi-wire',
        inputCount: 'none',
        navAntenna: 'none',
        gsmAntenna: 'none',
        gsmModem: 'none',
        simCardSlots: 'none',
        hasBLE: false,
        hasOneWire: false,
        hasCan: false,
        hasRS485: false,
        hasRS232: false,
        hasAccelerometer: false,
        hasMagnit: false,
        hasOdometr: false,
        hasGlonass: false,
        hasServers: false,
        hasConnection: false,
        hasWifi: false,
        hasAlarm: false,
        hasDriver: false,
        hasChat: false,
        hasConnectCamera: false,
        hasTahograf: false,
        hasDriving: false,
        hasSensorAnalog: false,
        hasLbs: false,
        hasSensorDigital: false,
        hasSms: false,
        hasTcp: false,
        hasGprs: false,
        hasMobilEye: false,
        hasModbus: false,
        typeEq: 'wire',
    },
    {
        name: 'arnavi-wire2',
        inputCount: 'none',
        navAntenna: 'none',
        gsmAntenna: 'none',
        gsmModem: 'none',
        simCardSlots: 'none',
        hasBLE: false,
        hasOneWire: false,
        hasCan: false,
        hasRS485: false,
        hasRS232: false,
        hasAccelerometer: false,
        hasMagnit: false,
        hasOdometr: false,
        hasGlonass: false,
        hasServers: false,
        hasConnection: false,
        hasWifi: false,
        hasAlarm: false,
        hasDriver: false,
        hasChat: false,
        hasConnectCamera: false,
        hasTahograf: false,
        hasDriving: false,
        hasSensorAnalog: false,
        hasLbs: false,
        hasSensorDigital: false,
        hasSms: false,
        hasTcp: false,
        hasGprs: false,
        hasMobilEye: false,
        hasModbus: false,
        typeEq: 'wire',
    },
    //  Кабель монтажный
    {
        name: 'arnavi-cable',
        inputCount: 'none',
        navAntenna: 'none',
        gsmAntenna: 'none',
        gsmModem: 'none',
        simCardSlots: 'none',
        hasBLE: false,
        hasOneWire: false,
        hasCan: false,
        hasRS485: false,
        hasRS232: false,
        hasAccelerometer: false,
        hasMagnit: false,
        hasOdometr: false,
        hasGlonass: false,
        hasServers: false,
        hasConnection: false,
        hasWifi: false,
        hasAlarm: false,
        hasDriver: false,
        hasChat: false,
        hasConnectCamera: false,
        hasTahograf: false,
        hasDriving: false,
        hasSensorAnalog: false,
        hasLbs: false,
        hasSensorDigital: false,
        hasSms: false,
        hasTcp: false,
        hasGprs: false,
        hasMobilEye: false,
        hasModbus: false,
        typeEq: 'cable',
    },
    // АКБ
    {
        name: 'arnavi-akb',
        inputCount: 'none',
        navAntenna: 'none',
        gsmAntenna: 'none',
        gsmModem: 'none',
        simCardSlots: 'none',
        hasBLE: false,
        hasOneWire: false,
        hasCan: false,
        hasRS485: false,
        hasRS232: false,
        hasAccelerometer: false,
        hasMagnit: false,
        hasOdometr: false,
        hasGlonass: false,
        hasServers: false,
        hasConnection: false,
        hasWifi: false,
        hasAlarm: false,
        hasDriver: false,
        hasChat: false,
        hasConnectCamera: false,
        hasTahograf: false,
        hasDriving: false,
        hasSensorAnalog: false,
        hasLbs: false,
        hasSensorDigital: false,
        hasSms: false,
        hasTcp: false,
        hasGprs: false,
        hasMobilEye: false,
        hasModbus: false,
        typeEq: 'akb',
    },
    // АКБ
    {
        name: 'arnavi-akb2',
        inputCount: 'none',
        navAntenna: 'none',
        gsmAntenna: 'none',
        gsmModem: 'none',
        simCardSlots: 'none',
        hasBLE: false,
        hasOneWire: false,
        hasCan: false,
        hasRS485: false,
        hasRS232: false,
        hasAccelerometer: false,
        hasMagnit: false,
        hasOdometr: false,
        hasGlonass: false,
        hasServers: false,
        hasConnection: false,
        hasWifi: false,
        hasAlarm: false,
        hasDriver: false,
        hasChat: false,
        hasConnectCamera: false,
        hasTahograf: false,
        hasDriving: false,
        hasSensorAnalog: false,
        hasLbs: false,
        hasSensorDigital: false,
        hasSms: false,
        hasTcp: false,
        hasGprs: false,
        hasMobilEye: false,
        hasModbus: false,
        typeEq: 'akb',
    },
    // АКБ
    {
        name: 'arnavi-akb3',
        inputCount: 'none',
        navAntenna: 'none',
        gsmAntenna: 'none',
        gsmModem: 'none',
        simCardSlots: 'none',
        hasBLE: false,
        hasOneWire: false,
        hasCan: false,
        hasRS485: false,
        hasRS232: false,
        hasAccelerometer: false,
        hasMagnit: false,
        hasOdometr: false,
        hasGlonass: false,
        hasServers: false,
        hasConnection: false,
        hasWifi: false,
        hasAlarm: false,
        hasDriver: false,
        hasChat: false,
        hasConnectCamera: false,
        hasTahograf: false,
        hasDriving: false,
        hasSensorAnalog: false,
        hasLbs: false,
        hasSensorDigital: false,
        hasSms: false,
        hasTcp: false,
        hasGprs: false,
        hasMobilEye: false,
        hasModbus: false,
        typeEq: 'akb',
    },
    // АКБ
    {
        name: 'arnavi-akb4',
        inputCount: 'none',
        navAntenna: 'none',
        gsmAntenna: 'none',
        gsmModem: 'none',
        simCardSlots: 'none',
        hasBLE: false,
        hasOneWire: false,
        hasCan: false,
        hasRS485: false,
        hasRS232: false,
        hasAccelerometer: false,
        hasMagnit: false,
        hasOdometr: false,
        hasGlonass: false,
        hasServers: false,
        hasConnection: false,
        hasWifi: false,
        hasAlarm: false,
        hasDriver: false,
        hasChat: false,
        hasConnectCamera: false,
        hasTahograf: false,
        hasDriving: false,
        hasSensorAnalog: false,
        hasLbs: false,
        hasSensorDigital: false,
        hasSms: false,
        hasTcp: false,
        hasGprs: false,
        hasMobilEye: false,
        hasModbus: false,
        typeEq: 'akb',
    },
    // АКБ
    {
        name: 'arnavi-akb5',
        inputCount: 'none',
        navAntenna: 'none',
        gsmAntenna: 'none',
        gsmModem: 'none',
        simCardSlots: 'none',
        hasBLE: false,
        hasOneWire: false,
        hasCan: false,
        hasRS485: false,
        hasRS232: false,
        hasAccelerometer: false,
        hasMagnit: false,
        hasOdometr: false,
        hasGlonass: false,
        hasServers: false,
        hasConnection: false,
        hasWifi: false,
        hasAlarm: false,
        hasDriver: false,
        hasChat: false,
        hasConnectCamera: false,
        hasTahograf: false,
        hasDriving: false,
        hasSensorAnalog: false,
        hasLbs: false,
        hasSensorDigital: false,
        hasSms: false,
        hasTcp: false,
        hasGprs: false,
        hasMobilEye: false,
        hasModbus: false,
        typeEq: 'akb',
    },

]
// export { devices };
