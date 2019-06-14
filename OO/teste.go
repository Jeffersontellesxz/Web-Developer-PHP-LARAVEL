func (snsMsg) reconcileAttendimente() error {
	date := snsMsg.Message
	group, err := reconcileAttendimenteKey(date, maps)
	if err != nil {
		return err
	}

	menber := Menber{}
	val := []byte(snsMsg.Message)
	s, _ := strconv.Unquote(string(val))
	err = json.Unmarshal([]byte(s), &menber)
}